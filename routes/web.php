<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\c_umkm;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\kp_dinasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;


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

Route::get('/', function () {
    return view('v_dahsboard/welcome');
});
Route::get('/register-information', function () {
    return view('email/register_information');
});
Route::get('/halamanutama_coba1', function () {
    return view('v_dahsboard/main');
});
// Route::get('/login', function () {
//     return view('login1');
// });
// Route::get('/virtualtour', function () {
//     return view('v_dahsboard/v_virtualtour');
// });
Route::get('/virtualtour', function () {
    return view('v_dahsboard/v_virtualtour');
});

Route::get('/alun-alun-subang', [DashboardController::class, 'index'])->name('dahsboard-subang');
Route::get('/alun-alun-subang/virtual-tour', [DashboardController::class, 'virtualtour'])->name('virtual-tour-subang');
// Route::get('/Register', function () {
//     return view('v_dahsboard/Register');
// });

// Route::get('/kelola event', function () {
//     return view('admin/kelola_event');
// });


//halaman dahsboard//
Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post('/login', [loginController::class, 'login']);
Route::get('/forgot-password', [loginController::class, 'forgotpassword_email'])->name('forgot-password');
Route::post('/forgotpassword/forgot-password-email', [loginController::class, 'sendResetLinkEmail'])->name('forgot-password-email');
Route::get('/forgotpassword/forgot-password-email/forgot-input-password', [loginController::class, 'forgotpassword'])->name('forgot-input-password');
Route::get('/login/forgot-password/{id}/{token}/{method}', [LoginController::class, 'password_update_input'])->name('password_update');
Route::post('/forgotpassword-update{id}', [loginController::class, 'forgotpassword_update'])->name('forgot-password-update');
Route::get('/login/information-password',[loginController::class,'v_forgot_password'])->name('v-forgot-password');
// Route::post('/pengajuan', [EventController::class, 'pengajuanevent'])->name('infopengajuan');
Route::post('/pengajuan-new', [EventController::class, 'pengajuanevent'])->name('pengajuan-new');


//halaman admin//
Route::post('/new-login', [loginController::class, 'newLogin'])->name('credentials');
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('laporan-user', [AdminController::class, 'laporanuser'])->name('laporanuser');
Route::get('laporan-event', [AdminController::class, 'laporanevent'])->name('laporanevent');
Route::get('laporan-kas-umkm', [AdminController::class, 'laporankasumkm'])->name('laporankasumkm');
Route::get('/cetak-user', [AdminController::class, 'cetak_laporanuser']);
Route::get('/cetak-event', [AdminController::class, 'cetak_laporanevent']);
Route::get('/cetak-kasumkm', [AdminController::class, 'cetak_laporankasumkm'])->name('cetak_laporankasumkm');
Route::get('/log-out', [loginController::class, 'logout'])->name('log-out');


//kelola event route
Route::get('/kelola-event', [AdminController::class, 'kelolaevent'])->name('kelola-event');
Route::get('/kelola-event/detail/{resi_id}', [AdminController::class, 'showevent']);
Route::get('/kelola-event/edit/{resi_id}', [AdminController::class, 'editevent'])->name('editevent');
Route::put('/kelola-event/edit/{resi_id}/update', [AdminController::class, 'update_event'])->name('update-event');
Route::get('/detailevent/{resi_id}', [AdminController::class, 'showevent']);
Route::get('/kelola-event/tambah-event', [AdminController::class, 'tambahevent'])->name('tambahevent');
Route::post('/admin-pengajuan', [AdminController::class, 'admin_pengajuanevent'])->name('admin-pengajuanevent');

//kelola kas UMKM route
Route::get('/kelola-kas-UMKM', [AdminController::class, 'kelolakasumkm'])->name('kelola-kas-umkm');
Route::get('/kelola-kas-UMKM/tambah-kas-umkm', [AdminController::class, 'tambahkas_umkm'])->name('tambahkas_umkm');
Route::post('/kelola-kas-UMKM/tambah-kas-umkm/tambah-kas-user', [AdminController::class, 'tambahkas_admin'])->name('tambahkas_admin');
// Route::get('/kelola-kas-UMKM/tambah-kas-umkm', [AdminController::class, 'tambahkas_admin'])->name('kelola-kas-umkm');
Route::get('/kelola-kas-umkm/detail/{id}', [AdminController::class, 'showkas'])->name('showkasUMKM');
Route::post('/kas/{id}/update-status/{status}', [AdminController::class, 'statuskas'])->name('kas.updatestatus-kas');

//kelola user route
Route::get('/kelola-user', [AdminController::class, 'datauser'])->name('kelola-user');
Route::get('/kelola-user/detail/{id}', [AdminController::class, 'show']);
Route::get('/kelola-user/edit/{id}', [AdminController::class, 'edituser'])->name('edituser');
Route::put('/kelola-user/edit/{id}/update', [AdminController::class, 'updateuser'])->name('update-user');
Route::get('/kelola-user/hapus/{id}', [AdminController::class, 'hapususer'])->name('hapus-user');
Route::get('/kelola-user/tambah-user', [AdminController::class, 'tambahuser'])->name('tambahuser');
Route::post('kelola-user/tambah-user/daftar-user', [AdminController::class, 'daftaruser'])->name('Admin-daftar-user');
Route::post('/kelola-user/pencarian', [AdminController::class, 'search'])->name('search-user');


//halaman kepala-dinas
Route::get('/kepala-dinas', [kp_dinasController::class, 'index'])->name('kepala-dinas');
Route::get('/konfirmasi-event', [kp_dinasController::class, 'konfirmasievent'])->name('konfirmasi-event');
Route::get('laporan-user-kepala-dinas', [kp_dinasController::class, 'laporanuser'])->name('kp_dinas_laporanuser');
Route::get("detailevent-kepala-dinas/{resi_id}", [kp_dinasController::class, 'showevent'])->name('showevent-kp_dinas');
Route::get('laporan-event-kepala-dinas', [kp_dinasController::class, 'laporanevent'])->name('kp_dinas_laporanevent');
Route::get('/cetak-event', [kp_dinasController::class, 'cetak_laporanevent']);
Route::get('laporan-kas-umkm-kepala-dinas', [kp_dinasController::class, 'laporankasumkm'])->name('kp_dinas_laporankasumkm');
Route::get('/cetak-laporan-kas', [kp_dinasController::class, 'cetak_laporankasumkm'])->name('cetak-laporan-kas-umkm-kp_dinas');
Route::post('/event/{resi_id}/update-status/{status}', [AdminController::class, 'statusevent'])->name('event.updateStatus');


//halaman registrasi//
Route::get('/Register', [loginController::class, 'register']);
Route::post('/daftar', [loginController::class, 'daftar'])->name('daftar');
Route::get('/daftar/konfirmasi-verifikasi',[loginController::class,'v_email_verifikasi'])->name('view-konfirmasi-user');
Route::get('/daftar/email-verification/{id}/{token}/{method}', [loginController::class, 'email_verifikasi'])->name('verifikasi-email');


//halaman umkm
Route::get('/umkm', [c_umkm::class, 'index'])->name('umkm');
Route::get('/data-diri', [c_umkm::class, 'data_diriuser'])->name('data_diriuser');
Route::post('/edituser/{id}', [c_umkm::class, 'edituser_pribadi'])->name('edituser-umkm');
Route::get('/pembayaranumkm', [c_umkm::class, 'pembayarankas'])->name('pembayarankas');
Route::post('/bayarkasumkm', [c_umkm::class, 'bayarkas_umkm'])->name('bayar-kas-umkm');



Route::get('/email', [EmailController::class, 'SendEmail'])->name('send-email');