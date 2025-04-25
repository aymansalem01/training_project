<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use App\Models\Shipp;
use App\Models\Coupon;
use App\Models\Payment;
use App\Events\PaymentEvent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Notifications\PaymentNotification;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function index()
    {
        $cart = Cart::where('user_id', Auth::id())
            ->where('status', 'active')
            ->with('items')
            ->first();
        $total_price = 0;

        if ($cart && $cart->items) {
            foreach ($cart->items as $item) {
                $total_price += $item->price * $item->pivot->quantity;
            }
        }
        return view('user.checkout', ['cart' => $cart, 'total_price' => $total_price]);
    }
    public function order(Request $request)
    {
        $request->validate([
            'first_name' => ' required ',
            'company_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone_number' => 'required | regex:/^07[0-9]{8}$/',
            'email' => 'required | email ',
        ]);
        $total_price = $request->total_price;
        $coupon = null;
        if ($request->coupon != null) {
            $coupon = Coupon::where('code', $request->copoun)->first();
            if ($coupon != null) {
                $total_price = ($total_price - ($total_price * ($coupon->value / 100)));
            }
            $coupon = null;
        }
        $shipp = Shipp::create([
            'user_id' => Auth::user()->id,
            'comp_name' => $request->company_name,
            'address' => $request->address . $request->city . $request->more_info
        ]);
        Payment::create([
            'user_id' => Auth::user()->id,
            'cart_id' => $request->cart,
            'paymet_way' => $request->drone,
            'shipp_id' => $shipp->id,
            'total_price' => $total_price,
            'use_coupon' => $request->coupon != null ? true : false,
            'coupon_id' => $coupon,
        ]);
        Cart::find($request->cart)->update([
            'status' => 'checked_out'
        ]);
        $admins = User::where('role', 'admin')->get();
        Notification::send($admins, new PaymentNotification(Auth::user()->name));
        event(new PaymentEvent());
        return redirect()->route('home')->with(['success' => 'your order in way']);
    }
}
