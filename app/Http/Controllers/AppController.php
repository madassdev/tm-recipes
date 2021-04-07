<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\Recipe;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class AppController extends Controller
{
    public function index()
    {
        return view('dashboard.vue');
    }

    public function frontIndex()
    {

        return view('front.vue');
        return view('dashboard.vue');
        $recipes = Recipe::with('category')->get();
        return view('front.index', compact('recipes'));
    }

    public function categories($category)
    {
        $category = strtolower($category);

        // $meals = Meal::whereCategory($category)->get()->random(12);
        $meals = Meal::whereCategory('breakfast')->get()->random(12);

        return view('front.category', compact('category', 'meals'));
    }


    public function saveMealResults($category, $meal, $results)
    {
        // $category_foods = $this->saveMealResults($category, 'tea', $this->complexSearch('tea'));

        collect($results)->each(function($r) use ($meal, $category){

            Meal::updateOrCreate(["sp_id"=>$r["id"]],[
                "category" => $category,
                "term" => $meal,
                "sp_id" => $r["id"],
                "title" => $r["title"],
                "image" => $r["image"],
                "image_type" => $r["imageType"],
            ]);
        });
    }

    public function complexSearch($term)
    {
        $res = Http::withHeaders([
            "Content-type" => "application/json"
        ])->get("https://api.spoonacular.com/recipes/complexSearch?apiKey=85fc9da86b1d444aaeb3598f8200566e&query=" . $term)->json();
        return $res['results'];
        // return "https://api.spoonacular.com/recipes/complexSearch?apiKey=85fc9da86b1d444aaeb3598f8200566e&query=".$term;
    }
}
