<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAdmin;
use App\Http\Controllers\ControllerLowongan;
use App\Models\Cari;
use App\Models\Lokasi;

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
//     return view('admin');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', 'ControllerAdmin@index')->middleware('auth');

Route::get('/user', 'ControllerUser@user');

// Route::get('/lowongan}',[ControllerLowongan::class, 'lowongan']);
// Lowongan select
Route::get('/lowongan', 'ControllerLowongan@lowongan');
// Lowongan insert
Route::get('/lowongan/input', 'ControllerLowongan@inputlowongan');
Route::post('/lowongan/input/tambahlowongan', 'ControllerLowongan@tambahlowongan');
// Lowongan update
Route::get('/lowongan/editlowongan/{id}', 'ControllerLowongan@editlowongan');
Route::post('/lowongan/updatelowongan', 'ControllerLowongan@updatelowongan');
// Lowongan delete
Route::get('/lowongan/hapuslowongan/{id}', 'ControllerLowongan@hapuslowongan');

//CARI
// Route::get('/home','ControllerHome@index1');

// CV
Route::get('/cv', 'ControllerCv@cv');

// Home
Route::post('/formhome/tambahcv', 'ControllerCv@tambahcv');
Route::get('/home', 'ControllerHome@index');
Route::get('/formhome/{id}', 'ControllerHome@formhome');
Route::get('/home/cari','ControllerHome@cari');
// Route::get('/home', function () {
//     return view('home');
// });
// Route::get('/formhome', function () {
//     return view('formhome');
// });

// internship
Route::get('/internship', 'ControllerInternship@internship');
Route::post('/forminternship/tambahintern', 'ControllerInternship@tambahintern');
Route::get('/internshipuser', 'ControllerInputInternship@index');
// Route::get('/internshipuser', function () {
//     return view('internshipuser');
// });
Route::get('/forminternship', function () {
    return view('forminternship');
});

// Report
Route::get('/reportinternship', 'ControllerReportInternship@reportinternship');
Route::get('/reportlowongan', 'ControllerReport@reportlowongan');
Route::get('/reportcv', 'ControllerReportCv@reportcv');

// Beasiswa
Route::get('/beasiswa', 'ControllerInputBeasiswa@index');
// Route::get('/beasiswa', function () {
//     return view('beasiswa');
// });

// Inputbeasiswa select
Route::get('/inputbeasiswa', 'ControllerInputBeasiswa@inputbeasiswa');
// inputbeasiswa insert
Route::get('/inputbeasiswa/inputanbeasiswa', 'ControllerInputBeasiswa@inputanbeasiswa');
Route::post('/inputbeasiswa/inputanbeasiswa/tambahinputanbeasiswa', 'ControllerInputBeasiswa@tambahinputbeasiswa');
// inputbeasiswa update
Route::get('/inputbeasiswa/editinputbeasiswa/{id}', 'ControllerInputBeasiswa@editinputbeasiswa');
Route::post('/inputbeasiswa/updateinputbeasiswa', 'ControllerInputBeasiswa@updateinputbeasiswa');
// inputbeasiswa delete
Route::get('/inputbeasiswa/hapusinputbeasiswa/{id}', 'ControllerInputBeasiswa@hapusinputbeasiswa');

// inputhome select
Route::get('/inputhome', 'ControllerInputHome@inputhome');
// inputhome insert
Route::get('/inputhome/inputanhome', 'ControllerInputHome@inputanhome');
Route::post('/inputhome/inputanhome/tambahinputanhome', 'ControllerInputHome@tambahinputhome');
// inputhome update
Route::get('/inputhome/editinputhome/{id}', 'ControllerInputHome@editinputhome');
Route::post('/inputhome/updateinputhome', 'ControllerInputHome@updateinputhome');
// inputhome delete
Route::get('/inputhome/hapusinputhome/{id}', 'ControllerInputHome@hapusinputhome');

// inputinternship select
Route::get('/inputinternship', 'ControllerInputInternship@inputinternship');
// inputinternship insert
Route::get('/inputinternship/inputaninternship', 'ControllerInputInternship@inputaninternship');
Route::post('/inputinternship/inputaninternship/tambahinputinternship', 'ControllerInputInternship@tambahinputinternship');
// inputinternship update
Route::get('/inputinternship/editinputinternship/{id}', 'ControllerInputInternship@editinputinternship');
Route::post('/inputinternship/updateinputinternship', 'ControllerInputInternship@updateinputinternship');
// inputinternship delete
Route::get('/inputinternship/hapusinputinternship/{id}', 'ControllerInputInternship@hapusinputinternship');