<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\chefController;



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
Route::middleware(['auth' ])->group(function () {
    Route::get('/qr-codes', [QrCodeController::class, 'index']);

    Route::get('/home', [QrCodeController::class, 'index'])->name('home');
    Route::get('/crud', [QrCodeController::class, 'crud'])->name('crud');
    Route::get('/addMenu', [QrCodeController::class, 'addMenu'])->name('addMenu');

Route::get('/qr-codes-show', [QrCodeController::class, 'index'])->name('qr-codes-show');
});


Route::middleware(['auth', 'role:chef'])->group(function () {

Route::get('/chef', [chefController::class, 'index'])->name('chef');
Route::post('/finishOrder', [chefController::class, 'finishOrder'])->name('finishOrder');
});

Route::middleware(['auth', 'role:admin'])->group(function () {


Route::get('/home', [QrCodeController::class, 'index'])->name('home');

});




Route::get('/', [ListController::class, 'profilePage']);
Route::get('/welcome/{tableNumber}', [QrCodeController::class, 'menu']);

Route::post('/saveTableNumbers', [QrCodeController::class, 'saveTable'])->name('saveTable');


Route::post('update-occupancy/{variable}', [ListController::class, 'updateOccupancy'])->name('update-occupancy');

Route::post('/saveItemRoute', [ListController::class, 'saveitem'])->name('saveItemRoute');

Route::get('/editMenu/{id}', [ListController::class, 'editMenu'])->name('editMenu');

Route::post('/updateMenu/{id}', [ListController::class, 'updateMenu'])->name('updateMenu');


Route::post('/markComRoute/{id}', [ListController::class, 'markCom'])->name('markCom');
//Route::get('/qr-codes', [QrCodeController::class, 'index']);
Route::get('qr-code/generate/{tableNumber}', 'QrCodeController@generate')->name('qr_code.generate');
Route::post('/storeNumbers', [QrCodeController::class, 'storeNumbers'])->name('storeNumbers');
Route::post('/deleteQR', [QrCodeController::class, 'deleteQR'])->name('deleteQR');

Route::get('listitems/{id}/edit', 'ListController@edit')->name('listitems.edit');
Route::patch('listitems/{id}', 'ListController@update')->name('listitems.update');



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('chef');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');