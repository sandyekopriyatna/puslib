<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\PublikasiController;


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

/*Route::get('/','\App\Http\Controllers\SiteController@home');*/



Route::get('generate', [InvitationController::class,'generate']);
Route::get('valid-url/{data}', [InvitationController::class,'index'])->name('homevalid');
Route::get('valid-url2/{data}', [InvitationController::class,'index2'])->name('homevalid2');



Route::post('/download{file}', '\App\Http\Controllers\SiteController@download');


Route::get('/sites/{id}/viewauthor', '\App\Http\Controllers\SiteController@viewauthor');
Route::get('/sites/{id}/profilalumni', '\App\Http\Controllers\SiteController@profilalumni');


Route::get('/login','\App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','\App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','\App\Http\Controllers\AuthController@logout');

Route::post('/verifikasi/{id}/updatepencairan','\App\Http\Controllers\InvitationController@updatepencairan');
Route::post('/verifikasi/{id}/updatediketahui','\App\Http\Controllers\InvitationController@updatediketahui');
Route::get('/verifikasi/berhasil', '\App\Http\Controllers\InvitationController@berhasil');

//Route::get('invitation/{code}',[PublikasiController::class, 'diperiksa'])->name('invitation')->middleware('signed');


Route::get('/publikasi/diperiksa', '\App\Http\Controllers\PublikasiController@diperiksa');

//Route::get('generate', function () {
   // return URL::temporarySignedRoute('invitation', now()->addMinutes(40), ['code' => uniqid()]);
//});
//admin
Route::group(['middleware' => ['auth','checkRole:admin']],function(){

		//user
		Route::get('/user', '\App\Http\Controllers\UserController@index');
		Route::post('/user/create','\App\Http\Controllers\UserController@create');
		Route::get('/user/{id}/delete','\App\Http\Controllers\UserController@delete');
		Route::get('/user/{id}/edit','\App\Http\Controllers\UserController@edit');
		Route::post('/user/{id}/update','\App\Http\Controllers\UserController@update');


		Route::get('/office', '\App\Http\Controllers\OfficeController@index');


		
		



});

//puslib 
Route::group(['middleware' => ['auth','checkRole:puslib']],function(){
		//pengajuan
		Route::get('/pengajuan','\App\Http\Controllers\PengajuanController@index');
		Route::post('/pengajuan/create','\App\Http\Controllers\PengajuanController@create');
		Route::get('/pengajuan/insert','\App\Http\Controllers\PengajuanController@insert');
		Route::get('/pengajuan/{id}','\App\Http\Controllers\PengajuanController@approved');
		
		Route::get('/approved/{id}','\App\Http\Controllers\PengajuanController@approved');
		Route::get('/tolak/{id}','\App\Http\Controllers\PengajuanController@tolak');
		Route::post('/pengajuan/{id}/updatealasan','\App\Http\Controllers\PengajuanController@updatealasan');
		Route::get('/linkdir/{id}','\App\Http\Controllers\PublikasiController@linkdir');

	
});
//dosen
Route::group(['middleware' => ['auth','checkRole:dosen']],function(){

		//publikasi
		Route::get('/publikasi', '\App\Http\Controllers\PublikasiController@index');
		Route::post('/publikasi/create','\App\Http\Controllers\PublikasiController@create');
		Route::get('/publikasi/insert','\App\Http\Controllers\PublikasiController@insert');
		Route::post('/subharga','\App\Http\Controllers\PublikasiController@subharga');
		Route::get('GetSubCatAgainstMainCatEdit/{id}', '\App\Http\Controllers\PublikasiController@GetSubCatAgainstMainCatEdit');

		Route::post('/fetch-states/{id}','\App\Http\Controllers\PublikasiController@fetchStates');
		
		

		Route::post('/getPenelitian','\App\Http\Controllers\PublikasiController@getPenelitian')->name('getPenelitian');
		  Route::get('GetSubCatAgainstMainCatEdit/{id}', 'CauseController@GetSubCatAgainstMainCatEdit'); 

		Route::get('/publikasi/disetujui', '\App\Http\Controllers\PublikasiController@disetujui');
		Route::get('/publikasi/ditolak', '\App\Http\Controllers\PublikasiController@ditolak');
		Route::get('/publikasi/{id}/revisi','\App\Http\Controllers\PublikasiController@revisi');
		Route::post('/publikasi/{id}/updaterevisi','\App\Http\Controllers\PublikasiController@updaterevisi');
		
		

});
//wd2
Route::group(['middleware' => ['auth','checkRole:wd2']],function(){

		//publikasi
		Route::get('/publikasi/diperiksa', '\App\Http\Controllers\PublikasiController@diperiksa');
		
		Route::get('/publikasi/pencairan/{id}','\App\Http\Controllers\PublikasiController@pencairan');
		Route::post('/publikasi/{id}/updatepencairan','\App\Http\Controllers\PublikasiController@updatepencairan');

});

//direktur
Route::group(['middleware' => ['auth','checkRole:direktur']],function(){

		//publikasi
		Route::get('/publikasi/diketahui', '\App\Http\Controllers\PublikasiController@diketahui');
		
		Route::get('/publikasi/verifikasi/{id}','\App\Http\Controllers\PublikasiController@verifikasi');
		Route::post('/publikasi/{id}/updateverifikasi','\App\Http\Controllers\PublikasiController@updateverifikasi');
		
});




Route::post('ckeditor/upload', '\App\Http\Controllers\CKEditorController@upload')->name('ckeditor.image-upload');


//puslib dan admin
Route::group(['middleware' => ['auth','checkRole:admin,puslib,direktur,keuangan']],function(){


		
		
		
		Route::post('/datapublikasi/create','\App\Http\Controllers\DatapublikasiController@create');
		Route::get('/datapublikasi/insert','\App\Http\Controllers\DatapublikasiController@insert');
		Route::get('/dataapproved/{id}','\App\Http\Controllers\DatapublikasiController@approved');

		Route::get('/publikasi/lengkap', '\App\Http\Controllers\PublikasiController@lengkap');
		Route::get('/publikasi/profilelengkap/{id}','\App\Http\Controllers\PublikasiController@profilelengkap');
		Route::get('/publikasi/exportpdf/{id}','\App\Http\Controllers\PublikasiController@exportpdf');
		Route::get('/publikasi/exportpr/{id}','\App\Http\Controllers\PublikasiController@exportpr');



});


Route::group(['middleware' => ['auth','checkRole:admin,puslib,dosen,wd2,direktur,keuangan']],function(){
Route::get('/','\App\Http\Controllers\DashboardController@index');


Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index');
Route::get('/datapublikasi', '\App\Http\Controllers\DatapublikasiController@index');
Route::get('/datapublikasi/{id}/profile', '\App\Http\Controllers\DatapublikasiController@profile');
Route::get('/publikasi/{id}/profile', '\App\Http\Controllers\PublikasiController@profile');
Route::get('/user/password', '\App\Http\Controllers\UserController@CPassword')->name('change.password');
Route::post('/updatepassword','\App\Http\Controllers\UserController@updatepassword')->name('password.update');



});




Route::get('/{slug}',[
'uses' => '\App\Http\Controllers\SiteController@singlepost',
'as' => 'site.single.post'
]);
Route::get('/{slug2}',[
'uses' => '\App\Http\Controllers\SiteController@singlepost2',
'as' => 'site.single2.post'
]);