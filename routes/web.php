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

Route::get('/', function(){
	return view('halamanawal');
})->name('halamanawal');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('verified');
Auth::routes(['verify' => true]);


Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });
});

Route::group(['middleware'=> ['auth', 'verified','checkRole:admin']], function(){
Route::resource('/category', 'CategoryController');
Route::resource('/daftarbab','DaftarbabController');
Route::resource('/tag','TagController');
Route::resource('/daftarsurat' , 'DaftarSuratController');
Route::resource('/indo' , 'IndoController');
Route::resource('/arab' , 'ArabController');
Route::resource('/event', 'EventController');
Route::get('/users', 'UsersController@index')->name('admin.users.index');
Route::get('/users/{user_id}/approve', 'UsersController@approve')->name('admin.users.approve');
Route::resource('/datadirikontributor', 'DatadirikontributorController');
Route::resource('/datapelanggan', 'DatapelangganController');
Route::resource('/datakontributor', 'DatakontributorController');
Route::get('/laporanpelanggan', 'LaporanController@laporanpelanggan')->name('laporan.pelanggan');
Route::get('/laporanpost', 'LaporanPostController@laporanpost')->name('laporan.post');
Route::get('/gaji', 'GajiController@gaji');
Route::get('/laporankontributor', 'LaporanController@laporankontributor');
});


Route::group(['middleware'=> ['auth', 'verified','checkRole:kontributor,admin']], function(){
Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
Route::delete('/post/kill/{id}', 'PostController@kill')->name('post.kill');
Route::resource('/post', 'PostController');
Route::resource('/user', 'UserController');
Route::resource('/profil', 'ProfilController');
Route::resource('/profilebackend', 'ProfilebackendController');
});

Route::group(['middleware'=> ['auth', 'verified','checkRole:kontributor']], function(){
Route::resource('/kontributor', 'KontributorController');
Route::get('/gajikontributor', 'GajiController@gajikontributor');
});

Route::group(['middleware'=> ['auth', 'verified','checkRole:pelanggan']], function(){
Route::get('/member', 'MemberController@index');
Route::resource('/pelanggan','PelangganController');

});



Route::group(['middleware'=> ['auth', 'verified','checkRole:pelanggan,admin,kontributor']], function(){
Route::get('/isi_post/{slug}','DashboardController@isi_web')->name('web.isi');
Route::get('/list-post','DashboardController@list_web')->name('web.list');
Route::get('/isi_event/{slug}','DashboardController@isi_event')->name('web.isievent');
Route::get('/list-event','DashboardController@list_event')->name('web.listevent');
Route::get('/cari','DashboardController@cari')->name('web.cari');
Route::get('/list-category/{category}','DashboardController@list_category')->name('web.category');
	Route::get('/bab', function () {
    	return view('bab');
	});

	Route::get('/quran', function () {
    	return view('quran');
	});
Route::resource('/profile', 'ProfilpelangganController');
Route::resource('/donasi', 'DonasiController');
Route::get('/pelanggandonasi', 'DonasiController@linkdonasi')->name('link.donasi');
Route::resource('/pelanggan','PelangganController');

Route::get('/pelanggan/profile/{id}', 'PelangganController@profile')->name('pelanggan.profile');
});

