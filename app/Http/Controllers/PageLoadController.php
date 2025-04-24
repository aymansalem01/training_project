<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class PageLoadController extends Controller
{
    public function index()
    {
        $items= Item::get();
        return view('user.home',['items'=>$items]);
    }
}
