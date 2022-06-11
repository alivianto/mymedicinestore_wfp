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

// Route::get('/', function () {
//     return view('home');
// });

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



Route::middleware(['auth'])->group(function(){
    Route::resource('obat','MedicineController');
    Route::resource('kategori_obat','CategoryController');

    Route::resource('transaction','TransactionController');
    Route::post('transaction/showDataAjax','TransactionController@showAjax')->name('transaction.showAjax');

    Route::post('/obat/showInfo','MedicineController@showInfo')->name('obat.showInfo');
    // Edit dengan reload
    Route::post('/obat/getEditForm','MedicineController@getEditForm')->name('obat.getEditForm');
    // Edit tanpa reload
    // 1. edit pergi ke view editform2 (formnya button type button bukan submit)
    Route::post('/obat/getEditForm2','MedicineController@getEditForm2')->name('obat.getEditForm2');
    // 2. Menyimpan edit tanpa reload
    Route::post('/obat/saveData','MedicineController@saveData')->name('obat.saveData');
    // Menghapus data tanpa reload
    Route::post('/obat/deleteData','MedicineController@deleteData')->name('obat.deleteData');
    
    Route::resource('medicineform','MedicineController');
    Route::resource('categoryform','CategoryController');

    // edit melalui double click
    Route::post('/obat/saveDataField','MedicineController@saveDataField')->name('obat.saveDataField');
});




// Frontend 
Route::get('/','MedicineController@front_index');
Route::get('cart','MedicineController@cart');
Route::get('add-to-cart/{id}','MedicineController@addToCart');

Route::get('/checkout','TransactionController@form_submit_front')->middleware(['auth']);
Route::get('/submit_checkout','TransactionController@submit_front')->name('submitcheckout')->middleware(['auth']);

//Route::resource('medicine/create','MedicineController@create');

// Route::get('obatModal','MedicineController@showlist')->name('showDetail');

//  php artisan route:list
// query 1 table
// show all medicines names, formulas, and prices
Route::get('/report/listmedicine/{id}','CategoryController@showlist')->name('reportShowMedicine');

Route::get('/report/listmedicinesinnerjoin','MedicineController@showAllMedicinesInnerJoinC');
Route::get('/report/listcategory','CategoryController@showListCateogory');
Route::get('/report/listmedicines','MedicineController@showAllMedicines');
Route::get('/report/categoryhasmedicines','MedicineController@showCategoryHasMedicines');
Route::get('/report/categorydonthavemedicines','MedicineController@CategoryNameDontHaveMedicines');
Route::get('/report/averagepriceforeachcategory','MedicineController@averagePriceForEachCategory');
Route::get('/report/categoryThatHas1Product', 'MedicineController@categoryThatHas1Product');
Route::get('/report/showMedicineHasOneForm', 'MedicineController@showMedicineHasOneForm');
Route::get('/report/showMedicinesHasMostExpensivePrice', 'MedicineController@showMedicinesHasMostExpensivePrice');

Auth::routes();

Route::get('/home', 'MedicineController@index')->name('home');
