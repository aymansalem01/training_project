<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(6);
        return view('admin.category.category',['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Category::create([
            'name' => $request->name
        ]);
        return $this->index()->with(['success' =>'category was added']);
    }

    public function show(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.show',['category'=>$category]);
    }

    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',['category'=>$category]);
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Category::find($id)->update([
            'name'=> $request->name
        ]);
        return $this->index()->with(['success' => 'category was updated']);
    }

    public function destroy(string $id)
    {
        Category::destroy($id);
        return $this->index()->with('success','category was deleted');
    }
}
