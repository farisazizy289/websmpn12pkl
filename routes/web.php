<?php

use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\KategoriBeritaController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\AboutController;

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

// ======= FRONTEND ======= \\

Route::get('/','Frontend\IndexController@index');

    ///// MENU \\\\\
        //// PROFILE SEKOLAH \\\\
        Route::get('profile-sekolah',[App\Http\Controllers\Frontend\IndexController::class,'profileSekolah'])->name('profile.sekolah');

        //// VISI dan MISI
        Route::get('visi-dan-misi',[App\Http\Controllers\Frontend\IndexController::class,'visimisi'])->name('visimisi.sekolah');

        //// PROGRAM STUDI \\\\
        Route::get('program/{slug}', [App\Http\Controllers\Frontend\MenuController::class, 'programStudi']);
        //// PROGRAM STUDI \\\\
        Route::get('kegiatan/{slug}', [App\Http\Controllers\Frontend\MenuController::class, 'kegiatan']);

        /// BERITA \\\
        Route::get('berita',[App\Http\Controllers\Frontend\IndexController::class,'berita'])->name('berita');
        Route::get('berita/{slug}',[App\Http\Controllers\Frontend\IndexController::class,'detailBerita'])->name('detail.berita');

        /// EVENT \\\
        Route::get('event/{slug}',[App\Http\Controllers\Frontend\IndexController::class,'detailEvent'])->name('detail.event');
        Route::get('event',[App\Http\Controllers\Frontend\IndexController::class,'events'])->name('event');
        
        /// ABSENSI \\\
        Route::get('/absensi', function () {
        return view('frontend.content.absensi');

        /// CEK ABSENSI \\\
        Route::post('/cek-absensi', [AbsensiController::class, 'cekAbsensi'])->name('cek.absensi');

        /// IMPORT SISWA \\\
        Route::post('/import-siswa', [AbsensiController::class, 'importSiswa'])->name('import.siswa');
});

Auth::routes(['register' => false]);


// ======= BACKEND ======= \\
Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

     /// PROFILE \\\
    Route::resource('profile-settings',Backend\ProfileController::class);
    /// SETTINGS \\\
      Route::prefix('settings')->group( function(){
        // BANK
        Route::get('/',[App\Http\Controllers\Backend\SettingController::class,'index'])->name('settings');
        // TAMBAH BANK
        Route::post('add-bank',[App\Http\Controllers\Backend\SettingController::class,'addBank'])->name('settings.add.bank');
        // NOTIFICATIONS
        Route::put('notifications/{id}',[SettingController::class,'notifications']);
      });


    /// CHANGE PASSWORD
    Route::put('profile-settings/change-password/{id}',[App\Http\Controllers\Backend\ProfileController::class, 'changePassword'])->name('profile.change-password');

    Route::prefix('/')->middleware('role:Admin')->group( function (){
        ///// WEBSITE \\\\\
        Route::resources([
            /// PROFILE SEKOLAH \\
            'backend-profile-sekolah'   => Backend\Website\ProfilSekolahController::class,
            /// VISI & MISI \\\
            'backend-visimisi'  => Backend\Website\VisidanMisiController::class,
            //// PROGRAM STUDI \\\\
            'program-studi' =>  Backend\Website\ProgramController::class,
            /// KEGIATAN \\\
            'backend-kegiatan' => Backend\Website\KegiatanController::class,
            /// IMAGE SLIDER \\\
            'backend-imageslider' => Backend\Website\ImageSliderController::class,
            /// ABOUT \\\
            'backend-about' => Backend\Website\AboutController::class,
            /// VIDEO \\\
            'backend-video' => Backend\Website\VideoController::class,
            /// KATEGORI BERITA \\\
            'backend-kategori-berita'   => Backend\Website\KategoriBeritaController::class,
            /// BERITA \\\
            'backend-berita' => Backend\Website\BeritaController::class,
            /// EVENT \\\
            'backend-event' => Backend\Website\EventsController::class,
            /// FOOTER \\\
            'backend-footer'    => Backend\Website\FooterController::class,
        ]);

        ///// PENGGUNA \\\\\
        Route::resources([
            /// PENGAJAR \\\
            'backend-pengguna-pengajar' => Backend\Pengguna\PengajarController::class,
            /// STAF \\\
            'backend-pengguna-staf' => Backend\Pengguna\StafController::class,
            /// MURID \\\
            'backend-pengguna-murid' => Backend\Pengguna\MuridController::class,
            /// PPDB \\\
            'backend-pengguna-ppdb' => Backend\Pengguna\PPDBController::class,
            /// PERPUSTAKAAN \\\
            'backend-pengguna-perpus' => Backend\Pengguna\PerpusController::class,
            /// BENDAHARA \\\
            'backend-pengguna-bendahara'  => Backend\Pengguna\BendaharaController::class
        ]);

        /// DELETE BERITA
        Route::delete('/backend-berita/{id}', [BeritaController::class, 'destroy'])->name('backend-berita.destroy');
        /// DELETE KATEGORI BERITA 
        Route::delete('/backend-kategori-berita/{id}', [KategoriBeritaController::class, 'destroy'])->name('backend-kategori-berita.destroy');
        /// DELETE EVENT
        Route::delete('/backend-event/{id}', [EventsController::class, 'destroy'])->name('backend-event.destroy');
        /// DELETE EKSTRAKURIKULER 
        Route::delete('/backend-kegiatan/{id}', [KegiatanController::class, 'destroy'])->name('backend-kegiatan.destroy');
        /// DELETE ABOUT
        Route::delete('/backend-about/{id}', [AboutController::class, 'destroy'])->name('backend-about.destroy');
        /// DELETE IMAGE SLIDER
        Route::delete('/backend-imageslider/{id}', [ImageSliderController::class, 'destroy'])->name('backend-imageslider.destroy');
        /// DELETE PENGAJAR
        Route::delete('/backend-pengguna-pengajar/{id}', [PengajarController::class, 'destroy'])->name('backend-pengguna-pengajar.destroy');
        /// DELETE VIDEO
        Route::delete('/backend-video/{id}', [VideoController::class, 'destroy'])->name('backend-video.destroy');
        /// DELETE MATA PELAJARAN
        Route::delete('/program-studi/{id}', [ProgramController::class, 'destroy'])->name('program-studi.destroy');

        
            



    });
});
