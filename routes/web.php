<?php

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
Route::resource('products', 'ProductController');

Route::get('login', function (){
    return 'Login';
})->name('login');

/*Route::delete('products/{id}', 'ProductController@destroy')->name('products.destroy');
Route::put('products/{id}', 'ProductController@update')->name('products.update');
Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit');
Route::get('products/create', 'ProductController@create')->name('products.create');
Route::get('products/{id}', 'ProductController@show')->name('products.show');
Route::get('products', 'ProductController@index')->name('products.index');
Route::post('products', 'ProductController@store')->name('products.store');*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', function() {
    return view('site.contact');
});*/

/*Route::middleware([])->group(function (){
    Route::prefix('panel')->group(function (){
        Route::namespace('Admin')->group(function (){
            Route::name('panel.')->group(function (){

                Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
                Route::get('/financeiro', function (){
                    return 'Financeiro Admin';
                })->name('financeiro');
                Route::get('/produtos', function (){
                    return 'Produtos Admin';
                })->name('produtos');
                Route::get('/', function (){
                    return redirect()->route('panel.dashboard');
                })->name('home');

            });

        });
    });
});*/

Route::group([
    'middleware' => [],
    'prefix' => 'panel',
    'namespace' => 'Admin',
    'as' => 'panel.'
], function () {

    Route::get('/dashboard', 'TesteController@teste')->name('dashboard');
    Route::get('/financeiro', function (){
        return 'Financeiro Admin';
    })->name('financeiro');
    Route::get('/produtos', function (){
        return 'Produtos Admin';
    })->name('produtos');
    Route::get('/', function (){
        return redirect()->route('panel.dashboard');
    })->name('home');

});