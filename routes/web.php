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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

//Route::view('/', 'welcome'); 

Route::get("foo", function () {
    return "Hello Program";
});

Route::get('userrp/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('userop/{name?}', function ($name = 'John') {
    return $name;
});

//Route::get($uri, $callback)->name('namaroute');
Route::get('foo1', function () {
    return 'Foo1';
})->name('namaroute');

Route::get('greeting', function () {
    return view('welcome', ['name' => 'Andi']);
});

Route::get('home', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| TUGAS WEEK 2 - Simple Routing + View
|--------------------------------------------------------------------------
*/

Route::get('catalog', function () {
    return view('catalog');
});

Route::get('catalog/medicines', function () {
    return view('medicines');
});

Route::get('catalog/med_equip', function () {
    return view('equipments');
});

Route::get('medicines/{medicine_id}', function ($medicine_id) {
    return view('detailmedicines',['id' => $medicine_id]);
});

Route::get('equipments/{equip_id}', function ($equip_id) {
    return view('detailequipments',['id' => $equip_id]);
});

/*
|--------------------------------------------------------------------------
*/

// Route::get('formnewproduct','ProductController@create');
// Route::get('formupdateproduct','ProductController@update');

// Route::resource('product', 'ProductResController');
// Route::get('report/product/json', 'ProductResController@jsonListData');

Route::resource('obat','MedicineController');
Route::resource('kategori_obat','CategoryController');
