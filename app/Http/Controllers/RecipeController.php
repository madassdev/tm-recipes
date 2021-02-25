<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::latest()->with('category')->paginate(10);
        return view('dashboard.recipes.index', compact('recipes'));
        return $recipes;
    }

    public function create()
    {
        $categories = Category::all();
        return view('dashboard.recipes.create', compact('categories'));
    }

    public function uploadToCloudinary(object $file)
    {
        $uploaded_image = cloudinary()->upload($file->getRealPath());
        return $uploaded_image->getSecurePath();
    }

    function uploadCk(Request $request)
    {

        $url = "https://picsum.photos/200/300";
        if($request->hasFile('upload'))
        {
            $url = $this->uploadToCloudinary($request->file('upload'));
        }
        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', 'Successfully mocked')</script>";
               
        @header('Content-type: text/html; charset=utf-8'); 
        echo $response;

    }

    public function store(Request $request)
    {
        // return $request;
        Recipe::create([
            "category_id" => $request->category_id,
            "title" => $request->title,
            "description" => $request->description,
        ]);

        return back()->withSuccess('Recipe post saved successfully');


        $gar = "<p><strong>What should we do now<\/strong><\/p>\r\n\r\n<ul>\r\n\t<li>Pray<\/li>\r\n\t<li>Eat<\/li>\r\n\t<li>Fast<\/li>\r\n\t<li>Dance<\/li>\r\n\t<li>Sleep<\/li>\r\n<\/ul>\r\n\r\n<p>Well we can as well always upload files<img alt=\"\" src=\"https:\/\/res.cloudinary.com\/franksmith\/image\/upload\/v1614126819\/mvjvtmjgd2yerr9wcwbp.gif\" style=\"height:200px; width:200px\" \/><\/p>";
    }

    public function edit(Recipe $recipe)
    {
        $categories = Category::all();
        return view('dashboard.recipes.edit',compact('recipe', 'categories'));
        return $recipe;
    }

    public function update(Request $request, Recipe $recipe)
    {
        $data = $request->validate([
            "category_id" => "required|numeric",
            "title" => "required",
            "description" => "string"
        ]);

        $recipe->update($data);
        return redirect(route('admin.recipes.show', $recipe->slug))->withSuccess('Recipe updated successfully');
    }

    public function show(Recipe $recipe)
    {
        $recipe->load('category');
        return view('dashboard.recipes.show', compact('recipe'));
    }


}
