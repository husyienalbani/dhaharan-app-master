<?php

use App\Http\Controllers\MapIndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Models\FinanceDonation;
use App\Models\Activity;
use App\Models\Place;
use App\Models\User;

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


Route::post('/register', [UserController::class, 'register']);

Route::middleware('auth')->group(function(){
    Route::get('/users/{id}/confirm', [UserController::class, 'confirmUser'])->name('users.confirm');
    Route::resource('/users', \App\Http\Controllers\UserController::class);
    Route::resource('/activities', \App\Http\Controllers\ActivityController::class);
    Route::resource('/finance_donations', \App\Http\Controllers\FinanceDonationController::class);
    Route::resource('/finance_expenses', \App\Http\Controllers\FinanceExpenseController::class);
    Route::resource('/finance_recapitulations', \App\Http\Controllers\FinanceRecapitulationController::class);
    Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
    Route::resource('/places', \App\Http\Controllers\PlaceController::class);

    Route::post('/places/{id}/approve', [PlaceController::class, 'approve'])->name('places.approve');

    Route::get('/calender', function () {
        return view('layout/frontend_admin/calender');
    });


});


Route::get('/map', [App\Http\Controllers\MapIndexController::class, 'index'])->name('map');
Route::get('kategori-spot/{slug}',[App\Http\Controllers\MapIndexController::class,'getCategory'])->name('kategori-spot');
Route::get('rute/{id}',[App\Http\Controllers\MapIndexController::class,'getRoute'])->name('cek-rute');
Route::get('detail_lokasi/{id}',[App\Http\Controllers\MapIndexController::class, 'detail'])->name('detail_lokasi');

Route::get('/', function () {
    return view('layout/frontend_user/master');
});

Route::get('/dashboard', function () {
    
    $activities = Activity::get();
    $count_activity = count($activities);

    $locations = Place::get();
    $count_place = count($locations);

    $donations = FinanceDonation::get();
    $count_donation = count($donations);

    $users = User::get();
    $count_user = count($users);
    return view('layout/frontend_admin/index', [
        'jumlah_kegiatan' => $count_activity,
        'jumlah_pendonasi' => $count_donation, 
        'jumlah_pengguna' => $count_user, 
        'jumlah_lokasi' => $count_place, 
    ]);
});

Route::get('/login', function () {
    return view('layout/auth/login');
});
Route::get('/register', function () {
    return view('layout/auth/register');
});


Route::get('/', [\App\Http\Controllers\IndexController::class, 'index']);

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


Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
