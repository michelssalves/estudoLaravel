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

Rota sem parametro obrigatorio

Route::get('/contact/{name}/{category_id}',
function(string $name = 'Desconhecido', int $category_id = 1){
echo "My name is $name and I have $category_id  about you";
})->where('category_id','[0-9]+')->where('name', '[A-Za-z]+'); 
Route::get('/contact/{name}/{idade?}', function(string $name, string $idade = '0') {
    echo "My name is $name and I have  $idade  years old";
});
Rota com parametro obrigatorio
Route::get('/contact/{name}/{idade}', function(string $name, int $idade) {
echo "My name is $name and I have  $idade  years old";
});
*/
Route::get('/', 'MainController@main')->name('site.index');
Route::get('/login/{error?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@authenticate')->name('site.login');
Route::get('/about', "AboutController@about")->name('site.about');

Route::GET('/contact', "ContactController@contact")->name('site.contact');
Route::POST('/contact', "ContactController@save")->name('site.contact');

Route::middleware('authentication')->prefix('/app')->group(function(){
    Route::get('/home', 'HomeController@index')->name('app.home');
    Route::get('/logout', 'LoginController@logout')->name('app.logout');
    Route::get('/customers', 'CustomersController@index')->name('app.customers');
    Route::get('/products', 'ProductsController@index')->name('app.products');

    Route::get('/providers', 'ProvidersController@index')->name('app.providers');
    Route::post('/providers/list', 'ProvidersController@list')->name('app.providers.list');
    Route::get('/providers/add', 'ProvidersController@add')->name('app.providers.add');
    Route::post('/providers/add', 'ProvidersController@add')->name('app.providers.add');

});

Route::get('/test/{p1}/{p2}', 'TestController@test')->name('site.test');


Route::fallback(function(){
    echo 'route accesses does not exist, <a href="'.route('site.index').'">click here</a> to go to home page';
});

