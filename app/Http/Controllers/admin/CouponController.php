<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{

    public function index()
    {
        $coupons = Coupon::get();
        return view('admin.coupon.coupon',['coupons' => $coupons]);
    }

    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required',
            'value' => ' required |numeric'
        ]);
        Coupon::create([
            'code' => $request->code,
            'value' => $request->value
        ]);
        return $this->index()->with('success','coupon created successfully');
    }

    public function show(string $id)
    {
        $coupon =  Coupon::with('classe')->find($id);
        return view('admin.coupon.show',['coupon' => $coupon]);
    }

    public function edit(string $id)
    {
        $coupon = Coupon::find($id);
        return view('admin.coupon.edit',['coupon'=>$coupon]);

    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'code' => 'required ',
            'value' => 'required |numeric'
        ]);
        Coupon::find($id)->update([
            'code' => $request->code,
            'value' => $request->value
        ]);
        return $this->index()->with('success', 'Coupon updated successfully!');
    }

    public function destroy(string $id)
    {
        Coupon::destroy($id);
        return redirect()->route('coupons.index')->with('success', 'Coupon deleted successfully!');
    }
}
