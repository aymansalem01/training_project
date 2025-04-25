<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class PageLoadController extends Controller
{
    public function index()
    {
        $items = Item::where('discount', '>', 0)->get();
        $best_sales = Item::withCount('review')
        ->orderByDesc('review_count')
        ->limit(4)
        ->get();
        $all = Item::get();
        return view('user.home',['items'=>$items , 'best_sales' =>$best_sales , 'all' => $all]);
    }
    public function product(string $id)
    {
        $item = Item::where('id',$id)->with(['review','image','category'])->first();
        $products = Item::withCount('review')
        ->orderByDesc('review_count')
        ->limit(4)
        ->get();
        return view('user.product',['item'=>$item,'products' => $products]);
    }
}
