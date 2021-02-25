<?php

namespace App\Models;

use App\Observers\RecipeObserver;
use IFrankSmith\Sluggable\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recipe extends Model
{
    use HasFactory, Sluggable, SoftDeletes;

    protected $fillable = [
        "category_id",
        "title",
        "description",
        "image_url",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sluggable()
    {
        return [
            "column" => "slug",
            "source" => "title",
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public static function boot()
    {
        parent::boot();
        self::observe(new RecipeObserver());
    }

}
