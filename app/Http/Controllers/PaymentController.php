<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipp;
use Illuminate\Support\Facades\Auth;

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
            'total_price' => $request->total_price,
            'use_coupon' => $request->coupon != null ? true : false ,
            'coupon_id' =>$request->coupon,
        ]);
        Cart::find($request->cart)->update([
            'status' => 'checked_out'
        ]);
        return redirect()->route('home')->with(['success'=>'your order in way']);
    }
}
