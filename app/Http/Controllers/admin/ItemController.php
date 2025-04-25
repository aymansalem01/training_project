<?php

namespace App\Http\Controllers\admin;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Image;

class ItemController extends Controller
{

    public function index()
    {
        $items = Item::with(['image', 'category'])->paginate(9);
        return view('admin.item.item', ['items' => $items]);
    }


    public function create()
    {
        $categories = Category::get();
        return view('admin.item.create', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => 'mimes:jpg,jpeg,png|max:2048',
            'price' => 'required |numeric',
            'discount' => 'numeric',
        ]);
        $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);
        $total_price = null;
        if($request->discount != null){
            $total_price = $request->price - ($request->price * ($request->discount / 100) );
        }
        $item = Item::create([
            'name' => $request->name,
            'category_id' => $request->category,
            'price' => $request->price,
            'discount' => $request->discount,
            'describtion' => 'hello',
            'total_price' => $total_price
        ]);
        Image::create([
            'item_id' => $item->id,
            'image' => $image_path
        ]);

        return $this->index()->with(['success' => 'item adeed successfully']);
    }

    public function show(string $id)
    {
        $item = Item::find($id);
        return view('admin.item.show', ['item' => $item]);
    }

    public function edit(string $id)
    {
        $item = Item::find($id);
        $categories = Category::get();
        return view('admin.item.edit', ['categories' => $categories, 'item' => $item]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'image' => 'mimes:jpg,jpeg,png|max:2048'
        ]);
        $image_path = uniqid() . '-' . $request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $image_path);
        Image::create([
            'item_id' => $id,
            'image' => $image_path
        ]);
        
        return $this->index()->with(['success' => 'item updated']);
    }


    public function destroy(string $id)
    {
        Item::destroy($id);
        return $this->index()->with(['success' => 'item deleted successfully']);
    }
}
