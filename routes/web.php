<?php

use App\Livewire\Admin\VerifikasiKode;
use App\Livewire\LandingPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\AdminLogin;
use App\Livewire\Admin\DataTamu;
use App\Livewire\Admin\Registrasi;
use App\Livewire\Admin\LupaPassword;

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


Route::get('/', LandingPage::class)->name(LandingPage::class);
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
Route::get('admin/lupapassword', LupaPassword::class)->name('LupaPassword');
Route::get('admin/registrasi', Registrasi::class)->name('registrasi');
Route::get('admin/login', AdminLogin::class)->name('adminlogin');
Route::get('admin/datatamu', DataTamu::class)->name('datatamu');


Route::get('admin/verifikasikode', VerifikasiKode::class)->name('verifikasikode');
