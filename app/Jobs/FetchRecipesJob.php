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
        // Find the recipe
        $recipes = $this->complexSearch($this->term);

        // Optimise CPU memory limit for his process
        ini_set('memory_limit', '1024M');

        // Sace the found recipes
        $this->saveMealResults($this->category, $this->term, $recipes);
    }

    public function complexSearch($term)
    {
        // Ready to communicate with the API
        $res = Http::withHeaders([
            "Content-type" => "application/json"
        ])
        // Get the recipe information
        ->get("https://api.spoonacular.com/recipes/complexSearch?apiKey=85fc9da86b1d444aaeb3598f8200566e&addRecipeInformation=true&query=" . $term)
        // Format the data to JSON
        ->json();

        // Return the JSON data for further processing.
        return $res['results'];
    }

    public function saveMealResults($category, $meal, $results)
    {
        // Laravel collection method allows us to efficiently loop through the data, 
        // We then pass a closure of the arguments we need to save the recipe.
        // This is necessary because some of the properties we want our recipes to have do not come from the API.
        collect($results)->each(function ($r) use ($meal, $category) {
            // Cleanup the data and create a new recipe appropriately, if the recipe id already exists, then update instead
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
