<?php

use App\Http\Controllers\MapIndexController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//route resource


Route::get('/', function () {
    return view('layout/frontend_user/master');
});

Route::get('/dasboard', function () {
    return view('layout/frontend_admin/index');
});


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);
Route::resource('/activities', \App\Http\Controllers\ActivityController::class);
Route::resource('/finance_donations', \App\Http\Controllers\FinanceDonationController::class);
Route::resource('/finance_expenses', \App\Http\Controllers\FinanceExpenseController::class);
Route::resource('/finance_recapitulations', \App\Http\Controllers\FinanceRecapitulationController::class);
Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
Route::resource('/places', \App\Http\Controllers\PlaceController::class);
Route::get('/map', [App\Http\Controllers\MapIndexController::class, 'index'])->name('map');
Route::get('kategori-spot/{slug}',[App\Http\Controllers\MapIndexController::class,'getCategory'])->name('kategori-spot');
Route::get('rute/{id}',[App\Http\Controllers\MapIndexController::class,'getRoute'])->name('cek-rute');
Route::get('detail_lokasi/{id}',[App\Http\Controllers\MapIndexController::class, 'detail'])->name('detail_lokasi');
/*
Route untuk Delete image kegiatan di admin
*/
Route::delete('/deleteimage/{id}',[\App\Http\Controllers\ActivityController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[\App\Http\Controllers\ActivityController::class,'deletecover']);
Route::delete('/deleteimage/{id}',[\App\Http\Controllers\PlaceController::class,'deleteimage']);
Route::delete('/deletecover/{id}',[\App\Http\Controllers\PlaceController::class,'deletecover']);


/*
Route untuk Detail 
*/
Route::get('/detail/{id}', [\App\Http\Controllers\ActivityController::class, 'detail'])->name('detail');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
