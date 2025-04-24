<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {
        $request->validate([
            'email' => 'required |email',
            'name' => 'required',
            'phone_number' => 'required|regex:/^07[0-9]{8}$/',
            'message' => 'required'
        ]);
        Feedback::create([
            'email' => $request->email,
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'messsage' => $request->message
        ]);
        return redirect()->back()->with(['success' => 'thanks for your feed back']);
    }
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required |email'
        ]);
        Subscribe::create([
            'email' =>  $request->email
        ]);
        return redirect()->back()->with(['success' => 'thanks for subscribe']);
    }
}
