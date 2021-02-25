<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                "id" => 1,
                "name" => "Admin",
                "email" => "admin@recipe.app",
                "password" => bcrypt("password"),
            ],
            [
                "id" => 2,
                "name" => "User",
                "email" => "user@recipe.app",
                "password" => bcrypt("password"),
            ]
        ]);

        Role::create([
            "name" => "admin"
        ]);

        Role::create([
            "name" => "user"
        ]);

        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('user');

        Category::insert([
            [
                "id" => 1,
                "name" => "Uncategorized",
                "description" => "Uncategorized recipes",
            ],
            [
                "id" => 2,
                "name" => "Breakfast",
                "description" => "Breakfast recipes",
            ],
            [
                "id" => 3,
                "name" => "Lunch",
                "description" => "Lunch recipes",
            ],
            [
                "id" => 4,
                "name" => "Dinner",
                "description" => "Dinner recipes",
            ],
            [
                "id" => 5,
                "name" => "Anytime",
                "description" => "Anytime recipes",
            ],
            [
                "id" => 6,
                "name" => "Dessert",
                "description" => "Dessert recipes",
            ]
        ]);

        Recipe::insert([
            [
                "category_id" => 1,
                "title" => "Frying Eggs 101",
                "slug" => "frying-eggs-101",
                "description" => "Let's get started",
            ],
            [
                "category_id" => 2,
                "title" => "Kimchi juice",
                "slug" => "kimchi-juice",
                "description" => "Let's get started",
            ],
            [
                "category_id" => 3,
                "title" => "Peppered Spaghetti special",
                "slug" => "peppered-spaghetti-special",
                "description" => "Let's get started",
            ]
        ]);


        // \App\Models\User::factory(10)->create();
    }
}
