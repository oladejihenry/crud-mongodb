<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function createPost(Category $category)
    {
        return view('categories.createPost', compact('category'));
    }
    
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;

        $category->save();

        return redirect()->route('categories');
    }

    public function show(Category $category)
    {
        $post = Post::all();
        // dd($post);
        return view('categories.show', compact('category', 'post'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories');
    }
}
