<?php

use App\Http\Controllers\MealController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'AppController@frontIndex')->name('front.index');
Route::get('/', 'AppController@frontIndex')->name('front.index');
Route::post('/pop/{category}', 'AppController@popPeriod')->name('front.index');
Route::get('/category/{category}', "AppController@categories"
)->name('front.categories.show');

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::name('admin.')->prefix('dashboard')->middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/', 'AppController@index')->name('index');
    Route::get('/meal', 'AppController@meals')->name('meals');

    Route::resource('categories', 'CategoryController');
    Route::get('categories/{category}/delete', 'CategoryController@destroy')->name('categories.delete');
    Route::post('/categories/upload-ck', 'RecipeController@uploadCk')->name('recipes.upload-ck');
    Route::get('/meals', "MealController@index")->name('meal.index');
    Route::get('/meals/{meal}/updateCategory/{category}', "MealController@updateCategory")->name('meal.updateCategory');
    // Route::get('/meals/{meal}/edit', "MealController@edit")->name('meal.edit');
    Route::get('/meals/{meal}/delete', "MealController@delete")->name('meal.delete');
    Route::post('/meals/search', "MealController@searchMeal")->name('meal.search');
    Route::post('/meals/find', "MealController@findMeal")->name('meal.find');
    Route::get('/meals/find', "MealController@index")->name('meal.find');
    Route::resource('recipes', 'RecipeController');
    
    Route::resource('questions', 'QuestionController');

    // Settings
    Route::get('settings', 'CategoryController@destroy')->name('settings.index');
});
Route::get('/logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');

require __DIR__.'/auth.php';
