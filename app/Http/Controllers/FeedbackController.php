<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback(Request $request)
    {

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
