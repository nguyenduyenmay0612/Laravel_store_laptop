<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvid_laptoper within a group which
| contains the "web" mid_laptopdleware group. Now create something great!
|
*/

// Route::get('/','FrontendController@index');

// Route::get('/trang-chu','FrontendController@index');
//Frontend
Route::get('/', [FrontendController::class, 'index']);
Route::get('/','App\Http\Controllers\FrontendController@index');
Route::get('/trang-chu','App\Http\Controllers\FrontendController@index');

Route::get('/laptop', [FrontendController::class, 'laptop']);
Route::get('/laptop','App\Http\Controllers\FrontendController@laptop');

Route::get('/thietbi', [FrontendController::class, 'thietbi']);
Route::get('/thietbi','App\Http\Controllers\FrontendController@thietbi');

Route::get('/camera', [FrontendController::class, 'camera']);
Route::get('/camera','App\Http\Controllers\FrontendController@camera');

Route::get('/lienhe', [FrontendController::class, 'lienhe']);
Route::get('/lienhe','App\Http\Controllers\FrontendController@lienhe');

//Backend
Route::get('/login-admin', [AdminController::class, 'login']);
Route::get('/login-admin','App\Http\Controllers\AdminController@login');

Route::post('/admin-login', [AdminController::class, 'logina']);
Route::post('/admin-login','App\Http\Controllers\AdminController@logina');

Route::get('/dashboard', [AdminController::class, 'dashboard']);
Route::get('/dashboard','App\Http\Controllers\AdminController@dashboard');

//laptop
Route::get('/add-laptop', [laptopController::class, 'add_laptop']);
Route::get('/add-laptop','App\Http\Controllers\LaptopController@add_laptop');

Route::get('/all-laptop', [laptopController::class, 'all_laptop']);
Route::get('/all-laptop','App\Http\Controllers\LaptopController@all_laptop');

Route::get('/edit-laptop/{id_laptop}', [laptopController::class, 'edit_laptop']);
Route::get('/edit-laptop/{id_laptop}','App\Http\Controllers\LaptopController@edit_laptop');

Route::get('/delete-laptop/{id_laptop}', [laptopController::class, 'delete_laptop']);
Route::get('/delete-laptop/{id_laptop}','App\Http\Controllers\LaptopController@delete_laptop');

Route::post('/save-laptop', [laptopController::class, 'save_laptop']);
Route::post('/save-laptop','App\Http\Controllers\LaptopController@save_laptop');

Route::post('/update-laptop/{id_laptop}', [laptopController::class, 'update_laptop']);
Route::post('/update-laptop/{id_laptop}','App\Http\Controllers\LaptopController@update_laptop');

Route::post('/delete-laptop/{id_laptop}', [laptopController::class, 'delete_laptop']);
Route::post('/delete-laptop/{id_laptop}','App\Http\Controllers\LaptopController@delete_laptop');

//thietbi
Route::get('/add-thietbi', [ThietbiController::class, 'add_thietbi']);
Route::get('/add-thietbi','App\Http\Controllers\ThietbiController@add_thietbi');

Route::get('/all-thietbi', [ThietbiController::class, 'all_thietbi']);
Route::get('/all-thietbi','App\Http\Controllers\ThietbiController@all_thietbi');

Route::get('/edit-thietbi/{id_thietbi}', [Thietbiontroller::class, 'edit_thietbi']);
Route::get('/edit-thietbi/{id_thietbi}','App\Http\Controllers\ThietbiController@edit_thietbi');

Route::get('/delete-thietbi/{id_thietbi}', [ThietbiController::class, 'delete_thietbi']);
Route::get('/delete-thietbi/{id_thietbi}','App\Http\Controllers\ThietbiController@delete_thietbi');

Route::post('/save-thietbi', [ThietbiController::class, 'save_thietbi']);
Route::post('/save-thietbi','App\Http\Controllers\ThietbiController@save_thietbi');

Route::post('/update-thietbi/{id_thietbi}', [ThietbiController::class, 'update_thietbi']);
Route::post('/update-thietbi/{id_thietbi}','App\Http\Controllers\ThietbiController@update_thietbi');

Route::post('/delete-thietbi/{id_thietbi}', [ThietbiController::class, 'delete_thietbi']);
Route::post('/delete-thietbi/{id_thietbi}','App\Http\Controllers\ThietbiController@delete_thietbi');

//camera
 
 Route::get('/add-camera', [CameraController::class, 'add_camera']);
Route::get('/add-camera','App\Http\Controllers\CameraController@add_camera');

Route::get('/all-camera', [CameraController::class, 'all_camera']);
Route::get('/all-camera','App\Http\Controllers\CameraController@all_camera');

Route::get('/edit-camera/{id_camera}', [CameraController::class, 'edit_camera']);
Route::get('/edit-camera/{id_camera}','App\Http\Controllers\CameraController@edit_camera');

Route::get('/delete-camera/{id_camera}', [CameraController::class, 'delete_camera']);
Route::get('/delete-camera/{id_camera}','App\Http\Controllers\CameraController@delete_camera');

Route::post('/save-camera', [CameraController::class, 'save_camera']);
Route::post('/save-camera','App\Http\Controllers\CameraController@save_camera');

Route::post('/update-camera/{id_camera}', [CameraController::class, 'update_camera']);
Route::post('/update-camera/{id_camera}','App\Http\Controllers\CameraController@update_camera');

Route::post('/delete-camera/{id_camera}', [CameraController::class, 'delete_camera']);
Route::post('/delete-camera/{id_camera}','App\Http\Controllers\CameraController@delete_camera');

//donhang
 Route::get('/all-donhang', [DonhangController::class, 'all_donhang']);
Route::get('/all-donhang','App\Http\Controllers\DonhangController@all_donhang');

Route::post('/save-donhang', [DonhangController::class, 'save_donhang']);
Route::post('/save-donhang','App\Http\Controllers\DonhangController@save_donhang');

Route::post('/delete-donhang/{id_donhang}', [DonhangController::class, 'delete_donhang']);
Route::get('/delete-donhang/{id_donhang}','App\Http\Controllers\DonhangController@delete_donhang');

//timkiem
Route::get('/timkiem-laptop', [laptopController::class, 'timkiem_laptop']);
Route::get('/timkiem-laptop','App\Http\Controllers\LaptopController@timkiem_laptop');

Route::get('/timkiem-thietbi', [ThietbiController::class, 'timkiem_thietbi']);
Route::get('/timkiem-thietbi','App\Http\Controllers\ThietbiController@timkiem_thietbi');

Route::get('/timkiem-camera', [CameraController::class, 'timkiem_camera']);
Route::get('/timkiem-camera','App\Http\Controllers\CameraController@timkiem_camera');