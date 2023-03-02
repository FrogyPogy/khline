<?php

use Illuminate\Support\Facades\Route;
use App\Models\posts;
use App\Http\Controllers\PostsController;
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

// Main page
Route::get('/home', [PostsController::class, 'index']);
// Main Page-answer
Route::get('/home/{post:slug}', [PostsController::class, 'showAnswer']);

//Sign-in Page
Route::get('/sign-in',function(){
    return view('/main/sign-in');
});

//Admin-dashboard
Route::get('/admin_d',function(){
    return view('/admin/admin_dashboard');
});

//Admin-anggota
Route::get('/admin_a',function(){
    return view('/admin/admin_anggota');
});

//Admin-laporan
Route::get('/admin_l',function(){
    return view('/admin/admin_laporan');
});

//Admin-pertanyaan
Route::get('/admin_p',function(){
    return view('/admin/admin_pertanyaan');
});

//Admin-Settings
Route::get('/admin_s',function(){
    return view('/admin/admin_settings');
});

//Penyuluh-dashboard
Route::get('/jft_dash',function(){
    return view('/penyuluh/penyuluh_dashboard');
});

//Penyuluh-notifikasi
Route::get('/jft_notif',function(){
    return view('/penyuluh/penyuluh_notifikasi');
});

//Penyuluh-laporan
Route::get('/jft_lapor',function(){
    return view('/penyuluh/penyuluh_laporan');
});

//Penyuluh-evaluasi
Route::get('jft_eval',function(){
    return view('/penyuluh/penyuluh_evaluasi');
});

//Penyuluh-riwayat
Route::get('jft_riwayat',function(){
    return view('/penyuluh/penyuluh_riwayat');
});

//Struktural-dashboard
Route::get('st_dash',function(){
    return view('/struktural/struktural_dashboard');
});

//Struktural-evaluasi
Route::get('st_eval',function(){
    return view('/struktural/struktural_evaluasi');
});

//Struktural-laporan
Route::get('st_laporan',function(){
    return view('/struktural/struktural_laporan');
});

//Struktural-notifikasi
Route::get('st_notif',function(){
    return view('/struktural/struktural_notifikasi');
});






