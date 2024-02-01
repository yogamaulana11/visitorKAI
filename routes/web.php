<?php

use App\Livewire\Admin\AdminDashboard;
use App\Livewire\Admin\VerifikasiKode;
use App\Livewire\LandingPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\AdminLogin;
use App\Livewire\Admin\DataTamu;
use App\Livewire\Admin\AturUlangPassword;
use App\Livewire\Admin\EditData;
use App\Livewire\Admin\Registrasi;
use App\Livewire\Admin\LupaPassword;
use App\Livewire\Admin\ReportData;
use App\Livewire\Admin\ProfileSetting;
use App\Livewire\Admin\ResetPassword;
use App\Livewire\Admin\UserKai;
use App\Livewire\Admin\ViewData;
use App\Livewire\Auth\Dashboard;

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

Route::get('admin/login', AdminLogin::class)->name('adminlogin');
Route::get('admin/registrasi', Registrasi::class)->name('registrasi');
Route::get('admin/lupapassword', LupaPassword::class)->name('lupapassword');
Route::get('admin/aturulangpassword', AturUlangPassword::class)->name('aturulangpassword');
Route::get('admin/reset-password/{token}', ResetPassword::class);
Route::get('admin/verifikasikode', VerifikasiKode::class)->name('verifikasikode');
Route::prefix('admin')->group(function () {
    Route::middleware(['authAdmin'])->group(function () {
        Route::get('/', AdminDashboard::class);
        Route::get('user-kai', UserKai::class);
        Route::get('datatamu', DataTamu::class);
        Route::get('reportdata', ReportData::class)->name('reportdata');
        Route::get('setting', ProfileSetting::class)->name('setting');
        Route::get('viewdata', ViewData::class)->name('viewdata');
        Route::get('editdata', EditData::class)->name('editdata');
    });
});


Route::prefix('user')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', LandingPage::class);
        Route::get('dashboard', Dashboard::class)->name('dashboard');
    });
});
Route::get('/', LandingPage::class)->name(LandingPage::class);
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
