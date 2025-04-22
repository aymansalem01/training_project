<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Payment;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function feedback()
    {
        $feedbacks = Feedback::get();
        $subscribes = Subscribe::get();
        return view('admin.feedback',['feedbacks' => $feedbacks,'subscribes'=>$subscribes]);
    }
    public function payment()
    {
        $payments = Payment::with(['user','cart','shipp','coupon'])->get();
        return view('admin.payment',['payments' => $payments]);
    }
    public function show_payment(string $id )
    {
        $payment = Payment::find($id);
    }
}
