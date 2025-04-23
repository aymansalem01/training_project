<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageLoadController extends Controller
{
    public function index()
    {
        return view('user.home');
    }
}
