<?php

namespace App\Http\Controllers\admin;

use App\Models\Payment;
use App\Models\Feedback;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

class AdminController extends Controller
{
    public function getNotifications()
    {
        $notifications = Notification::where("notifiable_type" ,'App\Models\User')
            ->where("notifiable_id" ,Auth::id())->get();

        return response()->json($notifications);
    }
    public function index()
    {
            $payments = Payment::with(['user','cart','coupon'])->get();
        return view('admin.dashboard',['payments'=>$payments]);
    }

    public function feedback()
    {
        $feedbacks = Feedback::paginate(10);
        $subscribes = Subscribe::paginate(10);
        return view('admin.feedback',['feedbacks' => $feedbacks,'subscribes'=>$subscribes]);
    }
    public function payment()
    {
        $payments = Payment::with(['user','cart','shipp','coupon',])->get();
        return view('admin.payment',['payments' => $payments]);
    }
    public function show_payment(string $id )
    {
        $payment = Payment::find($id);
    }
}
