<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Http;

class Meal extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        "recipe" => "array"
    ];

    public function saveRecipe()
    {
        $res = Http::withHeaders([
            "Content-type" => "application/json"
        ])->get("https://api.spoonacular.com/recipes/{$this->sp_id}/information?apiKey=85fc9da86b1d444aaeb3598f8200566e")->json();
        // dd($res);
        $this->recipe = $res;
        $this->save();
    }
}
