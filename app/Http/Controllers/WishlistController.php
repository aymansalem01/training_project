<?php

namespace App\Http\Controllers;

use App\Models\Wishlists;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlist = Auth::user()->items()->get();
        $products = Item::limit(4)->get();
        return view('user.wishlist',['wishlist'=>$wishlist,'products'=>$products]);
    }
}
