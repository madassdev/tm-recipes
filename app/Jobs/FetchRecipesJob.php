<?php

namespace App\Jobs;

use App\Models\Meal;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Http;

class FetchRecipesJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $term;
    public $category;

    public function __construct($term, $category)
    {
        $this->term = $term;
        $this->category = $category;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $recipes = $this->complexSearch($this->term);
        // dd($recipes);
        ini_set('memory_limit', '1024M');
        $this->saveMealResults($this->category, $this->term, $recipes);
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

    public function saveMealResults($category, $meal, $results)
    {

        collect($results)->each(function ($r) use ($meal, $category) {

            Meal::updateOrCreate(["sp_id" => $r["id"]], [
                "category" => $category,
                "term" => $meal,
                "sp_id" => $r["id"],
                "title" => $r["title"],
                "image" => $r["image"],
                "image_type" => $r["imageType"],
                "recipe" => $r
                // "recipe" => $recipe
            ]);
        });
    }
}
