<?php

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

Route::get('/', function () {
    return redirect(route('login'));
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');

Route::name('admin.')->prefix('dashboard')->middleware(['auth', 'role:admin'])->group(function(){
    Route::get('/', 'AppController@index')->name('index');

    Route::resource('categories', 'CategoryController');
    Route::get('categories/{category}/delete', 'CategoryController@destroy')->name('categories.delete');
    Route::post('/categories/upload-ck', 'RecipeController@uploadCk')->name('recipes.upload-ck');
    
    Route::resource('recipes', 'RecipeController');
    
    Route::resource('questions', 'QuestionController');

    // Settings
    Route::get('settings', 'CategoryController@destroy')->name('settings.index');
});
Route::get('/logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');

require __DIR__.'/auth.php';
