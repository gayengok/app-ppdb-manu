<?php

use Illuminate\Support\Facades\Route;


// _________________________BACKEND_____________________________//
// =============================================================//

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\LoginController;
// use App\Http\Controllers\Backend\RegisterController;
use App\Http\Controllers\Backend\Berita\ArtikelController;
use App\Http\Controllers\Backend\Siswa\StudentController;
use App\Http\Controllers\Backend\UploadPendaftaranController;
use App\Http\Controllers\Backend\Video\VideoController;
use App\Http\Controllers\Backend\Photo\PhotoController;
use App\Http\Controllers\Backend\Profil\ProfilController;
use App\Http\Controllers\HasilSeleksiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Backend\DataSiswa\KelasSepuluh\KelasSepuluhController;
use App\Http\Controllers\Backend\DataSiswa\KelasSebelas\Kelas11Controller;
use App\Http\Controllers\Backend\DataSiswa\KelasDuabelas\Kelas12Controller;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\Backend\PengaturanController;
use App\Http\Controllers\Backend\Data\Akun\SiswaController;
use App\Http\Controllers\Backend\Informasi\InformasiController;


// ___________________________FRONTEND____________________________________//
// =======================================================================//

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsController;
use App\Http\Controllers\Frontend\Galery\GalleryController;

use App\Http\Controllers\Frontend\Informasi\PPDBController;
use App\Http\Controllers\Frontend\Syarat\PendaftaranController;
use App\Http\Controllers\Frontend\Profil\SejarahController;
use App\Http\Controllers\Frontend\Profil\VisiMisiController;
use App\Http\Controllers\Backend\Guru\GuruController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Frontend\Contact\ContactController;
use App\Http\Controllers\Frontend\SearchController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Frontend\Soal\Petunjuk\PetunjukController;

//____________________________ DASHBOARD PPDB SISWA BARU___________________________//
// ================================================================================//

use App\Http\Controllers\Backend\PPDB\Dashboard\AppSiswaController;
use App\Http\Controllers\Backend\PPDB\Auth\Login\UserSiswaController;
use App\Http\Controllers\Backend\PPDB\Auth\Register\RegisterSiswaController;
use App\Http\Controllers\Backend\PPDB\Dashboard\Siswa\IdentitasSiswaController;
use App\Http\Controllers\Backend\PPDB\Dashboard\Siswa\DokumenSiswaController;
use App\Http\Controllers\Backend\PPDB\Verifikasi\VerifikasiController;
use App\Http\Controllers\Backend\Pengumuman\Siswa\HasilController;
use App\Http\Controllers\Backend\PPDB\Pengumuman\KelulusanController;
use App\Http\Controllers\Backend\PPDB\Pengumuman\SuratController;

// DATA ROUTE BAGIAN BACKEND

Route::get('/dashboard', [DashboardController::class, 'show'])->name('dashboard');

Route::get('/notifications/mark-as-read', function () {
    \App\Models\Notification::where('is_read', false)->update(['is_read' => true]);
    return Redirect::back();
})->name('notifications.markAsRead');

//Halaman login ADMIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');

Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');


// Profil 
Route::middleware('auth')->get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::middleware('auth')->post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');

// Data Siswa
Route::prefix('admin')->group(function () {
    Route::get('/students', [StudentController::class, 'index'])->name('admin.students.index');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('admin.students.show');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('admin.students.destroy');
});

Route::post('/students', [StudentController::class, 'store'])->name('students.store');
Route::get('student/{id}/download-pdf', [StudentController::class, 'downloadPdf'])->name('students.downloadPdf');
Route::put('/student/{id}/status', [StudentController::class, 'updateStatus'])->name('student.updateStatus');

// Verifikasi Data
Route::get('/hasil-seleksi', [HasilSeleksiController::class, 'index'])->name('hasil_seleksi.index');
Route::get('hasil-seleksi/cetak-pdf', [HasilSeleksiController::class, 'printPDF'])->name('hasil_seleksi.printPDF');


// Route untuk melihat dokumen admin
Route::get('/dokumen', [PendaftaranController::class, 'showDokumen'])->name('admin.dokumen.index');
Route::post('/dokumen', [PendaftaranController::class, 'syarat'])->name('admin.dokumen.store');
Route::delete('/dokumen/{id}', [PendaftaranController::class, 'destroy'])->name('admin.dokumen.delete');
Route::get('/dokumen/download/{filename}', [PendaftaranController::class, 'download'])->name('admin.dokumen.download');

Route::get('/syarat-pendaftaran', [PendaftaranController::class, 'showForm'])->name('syarat.form');
Route::post('/upload-syarat-pendaftaran', [PendaftaranController::class, 'syarat'])->name('upload.syarat');

// DATA BERITA

Route::get('/berita', [ArtikelController::class, 'index'])->name('news.berita');
Route::get('/post', [ArtikelController::class, 'post'])->name('post.berita');
Route::post('/articles', [ArtikelController::class, 'store'])->name('articles.store');
Route::get('/{id}/edit', [ArtikelController::class, 'edit'])->name('articles.edit');
Route::put('/{id}', [ArtikelController::class, 'update'])->name('articles.update');
Route::delete('artikels/{artikel}', [ArtikelController::class, 'destroy'])->name('artikels.destroy');

// DATA GURU 

Route::prefix('admin')->group(function () {

    Route::get('guru', [GuruController::class, 'index'])->name('guru.index');
    Route::get('guru/create', [GuruController::class, 'create'])->name('guru.create');
    Route::post('guru', [GuruController::class, 'store'])->name('guru.store');
    Route::get('guru/{guru}', [GuruController::class, 'show'])->name('guru.show');
    Route::get('guru/{guru}/edit', [GuruController::class, 'edit'])->name('guru.edit');
    Route::put('guru/{guru}', [GuruController::class, 'update'])->name('guru.update');
    Route::delete('guru/{guru}', [GuruController::class, 'destroy'])->name('guru.destroy');
});



// UPLOAD PENDAFTARAN
Route::get('/upload-pendaftaran/create', [UploadPendaftaranController::class, 'create'])->name('upload-pendaftaran.create');
Route::post('/upload-pendaftaran', [UploadPendaftaranController::class, 'store'])->name('upload-pendaftaran.store');
Route::get('/upload-pendaftaran', [UploadPendaftaranController::class, 'index'])->name('upload-pendaftaran.index');

Route::get('upload-pendaftaran/{id}/edit', [UploadPendaftaranController::class, 'edit'])->name('upload-pendaftaran.edit');
Route::put('upload-pendaftaran/{id}', [UploadPendaftaranController::class, 'update'])->name('upload-pendaftaran.update');
Route::delete('upload-pendaftaran/{id}', [UploadPendaftaranController::class, 'destroy'])->name('upload-pendaftaran.destroy');

// Bagian Upload Video
Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
Route::get('/videos/create', [VideoController::class, 'create'])->name('videos.create');
Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
Route::get('/videos/{id}/edit', [VideoController::class, 'edit'])->name('videos.edit');
Route::put('/videos/{video}', [VideoController::class, 'update'])->name('videos.update');
Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('videos.destroy');

// Bagian Upload Photo

Route::get('/photo', [PhotoController::class, 'index'])->name('photo.index');
Route::get('/photo/create', [PhotoController::class, 'create'])->name('photo.create');
Route::post('/photo', [PhotoController::class, 'store'])->name('photo.store');
Route::get('/photo/{id}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
Route::put('/photo/{id}', [PhotoController::class, 'update'])->name('photo.update');
Route::delete('/photo/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy');

Route::get('/profil/sejarah', [ProfilController::class, 'index'])->name('sejarah.index');
Route::get('sejarah/create', [ProfilController::class, 'create'])->name('sejarah.create');
Route::post('sejarah', [ProfilController::class, 'store'])->name('sejarah.store');
Route::get('sejarah/{id}/edit', [ProfilController::class, 'edit'])->name('sejarah.edit');
Route::put('sejarah/{id}', [ProfilController::class, 'update'])->name('sejarah.update');
Route::delete('sejarah/{id}', [ProfilController::class, 'destroy'])->name('sejarah.destroy');

// Bagian Route Kelas 10
Route::prefix('admin')->group(function () {
    Route::controller(KelasSepuluhController::class)->group(function () {
        Route::get('/kelas-10', 'index')->name('kelas-10.index');
        Route::get('/kelas-10/create', 'create')->name('kelas-10.create');
        Route::post('/kelas-10', 'store')->name('kelas-10.store');
        Route::get('/kelas-10/{id}/edit', 'edit')->name('kelas-10.edit');
        Route::put('/kelas-10/{id}', 'update')->name('kelas-10.update');
        Route::delete('/kelas-10/{id}', 'destroy')->name('kelas-10.destroy');
    });
});

// Bagian Route Kelas 11
Route::prefix('admin')->group(function () {
    Route::controller(Kelas11Controller::class)->group(function () {
        Route::get('/kelas-11', 'index')->name('kelas-11.index');
        Route::get('/kelas-11/create', 'create')->name('kelas-11.create');
        Route::post('/kelas-11', 'store')->name('kelas-11.store');
        Route::get('/kelas-11/{id}/edit', 'edit')->name('kelas-11.edit');
        Route::put('/kelas-11/{id}', 'update')->name('kelas-11.update');
        Route::delete('/kelas-11/{id}', 'destroy')->name('kelas-11.destroy');
    });
});

// Bagian Route Kelas 12
Route::prefix('admin')->group(function () {
    Route::controller(Kelas12Controller::class)->group(function () {
        Route::get('/kelas-12', 'index')->name('kelas-12.index');
        Route::get('/kelas-12/create', 'create')->name('kelas-12.create');
        Route::post('/kelas-12', 'store')->name('kelas-12.store');
        Route::get('/kelas-12/{id}/edit', 'edit')->name('kelas-12.edit');
        Route::put('/kelas-12/{id}', 'update')->name('kelas-12.update');
        Route::delete('/kelas-12/{id}', 'destroy')->name('kelas-12.destroy');
    });
});

Route::prefix('admin')->group(function () {
    Route::get('/informasi', [InformasiController::class, 'index'])->name('admin.informasi.index');
    Route::post('/informasi', [InformasiController::class, 'store'])->name('admin.informasi.store');
    Route::put('/informasi/{id}', [InformasiController::class, 'update'])->name('admin.informasi.update');

    Route::delete('/informasi/{id}', [InformasiController::class, 'destroy'])->name('admin.informasi.destroy');
});

// DATA BAGIAN ROUTE FRONTEND

Route::get('/', [HomeController::class, 'index'])->name('pages.home');
Route::get('/news', [NewsController::class, 'index'])->name('news.blog');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');
// Kumpulan Gaelery
Route::get('/galery', [GalleryController::class, 'index'])->name('galery.foto');
Route::get('/galery-video', [GalleryController::class, 'video'])->name('galery.video');
// DATA PENGUMUMAN SISWA

Route::post('/upload-image', [ImageController::class, 'uploadImage']);
Route::get('/sejarah', [SejarahController::class, 'index'])->name('profil.sejarah');
Route::get('/visi-misi', [VisiMisiController::class, 'visiMisi'])->name('profil.visi-misi');

Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/search', [SearchController::class, 'index'])->name('search');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
    Route::delete('/siswa/{id}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
});


Route::get('/admin/settings', [PengaturanController::class, 'showSettings'])->name('admin.settings');
Route::post('/admin/settings', [PengaturanController::class, 'updateStatus'])->name('admin.updateStatus');


// ______________________DASHBOARD PPDB SISWA BARU____________________________//
// ===========================================================================//

Route::get('/app', [AppSiswaController::class, 'index'])->name('app');

Route::get('/siswa/login_siswa', [UserSiswaController::class, 'index'])->name('login_siswa');
Route::post('/siswa/login_siswa', [UserSiswaController::class, 'login'])->name('login_siswa.login');
Route::get('/siswa/register_siswa', [RegisterSiswaController::class, 'index'])->name('register_siswa.index');
Route::post('/calon-siswa/register', [RegisterSiswaController::class, 'store'])->name('calon_siswa.store');
Route::post('/siswa/logout', [UserSiswaController::class, 'logout'])->name('siswa.logout');


Route::get('/siswa/identitas_siswa', [IdentitasSiswaController::class, 'index'])->name('identitas_siswa.index');
Route::post('/siswa/identitas_siswa', [IdentitasSiswaController::class, 'store'])->name('identitas_siswa.store');

Route::get('/siswa/upload_dokumen', [DokumenSiswaController::class, 'index'])->name('upload_dokumen.index');
Route::post('/siswa/upload_dokumen', [DokumenSiswaController::class, 'documen'])->name('upload_dokumen.documen');
Route::get('/informasi/ppdb', [PPDBController::class, 'index'])->name('ppdb.siswa');

Route::get('/siswa/verifikasi', [VerifikasiController::class, 'index'])->name('verifikasi.index');
Route::get('/petunjuk', [PetunjukController::class, 'index'])->name('petunjuk.index');
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz/submit', [QuizController::class, 'submit'])->name('quiz.submit');
Route::get('/quiz/result/{quizAttempt}', [QuizController::class, 'result'])->name('quiz.result');
Route::get('/admin/quiz', [QuizController::class, 'admin'])->name('quiz.admin');
Route::delete('/quiz/{id}', [QuizController::class, 'destroy'])->name('quiz.delete');

Route::get('/pengumuman_siswa', [HasilController::class, 'index'])->name('pengumuman.index');
Route::put('/pengumuman_siswa/update/{id}', [HasilController::class, 'updateStatus'])->name('pengumuman.update');
Route::get('/kelulusan', [KelulusanController::class, 'index'])->name('kelulusan.index');
Route::get('/cetak-pdf/{id}', [KelulusanController::class, 'cetakPdf'])->name('cetak.pdf');
Route::get('/pengumuman/surat', [SuratController::class, 'index'])->name('surat.index');
