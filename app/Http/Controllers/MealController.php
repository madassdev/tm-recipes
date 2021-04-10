<?php

namespace App\Http\Controllers;

use App\Models\Meal;
use Illuminate\Http\Request;

class MealController extends Controller
{
    public function index()
    {
        $meals = Meal::whereNotNull('recipe')->paginate(30);
        // return $meals;
        return view('dashboard.meals.index', compact('meals'));
    }

    public function updateCategory(Meal $meal, $category)
    {
        $meal->category = $category;
        $meal->save();
        return redirect(route('admin.meal.index'))->withSuccess('Category updated successfully');
    }

    public function edit(Meal $meal)
    {
        return $meal;
    }

    public function delete(Meal $meal)
    {
        $meal->delete();
        return redirect(route('admin.meal.index'))->withSuccess('Recipe deleted successfully!');
        return $meal;
    }

    public function searchMeal(Request $request)
    {
        //Queue the job...


        return redirect(route('admin.meal.index'))->withSuccess('Searching for "' . ucfirst($request->term) . '"recipes in background, changes will reflect after API request and categorization is complete.');
    }

    public function findMeal(Request $request)
    {
        $term = $request->term;
        $meals = Meal::where('title', 'LIKE', '%' . $term . '%')
            ->orWhere('term', 'LIKE', '%' . $term . '%')
            ->orWhere('category', 'LIKE', '%' . $term . '%')
            ->paginate(20)
            ->appends(request()->query());
        session()->flash('success', number_format($meals->total()) . " Meal(s) found for '" . ucfirst($term) . "'");

        return view('dashboard.meals.index', compact('meals'));
    }
}
