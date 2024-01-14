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
use App\Livewire\Admin\ViewData;

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
Route::prefix('admin')->group(function () {
    Route::middleware(['authAdmin'])->group(function () {
        Route::get('/', AdminDashboard::class);
        Route::get('datatamu', DataTamu::class);
        Route::get('lupapassword', LupaPassword::class)->name('LupaPassword');
        Route::get('aturulangpassword', AturUlangPassword::class)->name('aturulangpassword');
        Route::get('verifikasikode', VerifikasiKode::class)->name('verifikasikode');
        Route::get('reportdata', ReportData::class)->name('reportdata');
        Route::get('setting', ProfileSetting::class)->name('setting');
        Route::get('viewdata', ViewData::class)->name('viewdata');
        Route::get('editdata', EditData::class)->name('editdata');
    });
});

Route::get('/', LandingPage::class)->name(LandingPage::class);
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
