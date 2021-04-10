<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('recipes')->get();
        return view('dashboard.categories.index', compact('categories'));

    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required|max:255"
        ]);

        Category::create([
            "name" => $request->name
        ]);

        return back()->withSuccess('Category created successfully');
    }

    public function show(Category $category)
    {
        $category->load('recipes');
        return $category;
        return view('dashboard.categories.show', compact('category'));
    }

    public function destroy(Category $category)
    {
        if($category->id == 1)
        {
            return back()->withError('Default category cannot be deleted!!');
        }
        
        $category->recipes->each(function($recipe){
            $recipe->update(["category_id" => 1]);
        });
        
        $category->delete();
        return back();
        return back()->withSuccess('Category deleted successfully');

    }
}
