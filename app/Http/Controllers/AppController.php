<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use App\Models\MealRecipe;
use App\Models\Recipe;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class AppController extends Controller
{
    public function index()
    {
        return redirect(route('dashboard.meal.index'));
        return view('dashboard.index');
    }
    
    public function meals()
    {
        return view('dashboard.meals');
    }

    public function frontIndex()
    {

        // return Meal::whereNull('recipe')->take(20)->get()
        // ->each(function($m){
        //     $m->saveRecipe();
        // })
        // ;

        // return 

        return view('front.vue');
        return view('dashboard.vue');
        $recipes = Recipe::with('category')->get();
        return view('front.index', compact('recipes'));
    }

    public function categories($category)
    {

        $category = strtolower($category);
        // return $this->seed();
        $meals = Meal::whereCategory($category)->paginate(20);

        // return $meals;
        // return $meals->first()->toArray()['term'];

        return view('front.category', compact('category', 'meals'));
    }

    public function seed()
    {
        return Meal::all()->skip(20)->map(function ($m) {
            $res = Http::withHeaders([
                "Content-type" => "application/json"
            ])->post('https://tmrecipes.herokuapp.com/pop/breakfast', ["data" => $m->toArray()])->body();
            return $res;
        });
    }

    public function saveMealResults($category, $meal, $results)
    {
        // $category_foods = $this->saveMealResults($category, 'tea', $this->complexSearch('tea'));

        collect($results)->each(function ($r) use ($meal, $category) {

            Meal::updateOrCreate(["sp_id" => $r["id"]], [
                "category" => $category,
                "term" => $meal,
                "sp_id" => $r["id"],
                "title" => $r["title"],
                "image" => $r["image"],
                "image_type" => $r["imageType"],
                "recipe" => $r
            ]);
        });
    }

    public function complexSearch($term)
    {
        $res = Http::withHeaders([
            "Content-type" => "application/json"
        ])->get("https://api.spoonacular.com/recipes/complexSearch?apiKey=85fc9da86b1d444aaeb3598f8200566e&addRecipeInformation=true&query=" . $term)->json();
        // dd($res);
        return $res['results'];
        // return "https://api.spoonacular.com/recipes/complexSearch?apiKey=85fc9da86b1d444aaeb3598f8200566e&query=".$term;
        // return "https://api.spoonacular.com/recipes/complexSearch?apiKey=7fc8f9652d9d4a42a3d8d79d11601903&query=".$term;
    }

    // public function popPeriod(Request $request, $category)
    // {
    //     $r = $request->data;
    //     Meal::updateOrCreate(["sp_id" => $r["id"]], [
    //         "category" => $r['category'],
    //         "term" => $r['term'],
    //         "sp_id" => $r["id"],
    //         "title" => $r["title"],
    //         "image" => $r["image"],
    //         "image_type" => $r["image_type"],
    //     ]);

    //     return Meal::latest()->first();
    // }
}
