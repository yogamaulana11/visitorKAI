<?php

use App\Livewire\Auth\Login;
use App\Livewire\LandingPage;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\AdminLogin;
use App\Livewire\Admin\EditData;
use App\Livewire\Admin\Registrasi;
use App\Livewire\Admin\LupaPassword;
use Illuminate\Support\Facades\Route;

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


Route::get('/',LandingPage::class)->name( LandingPage::class);
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');
Route::get('admin/lupapassword',LupaPassword::class )->name('LupaPassword');
Route::get('admin/registrasi', Registrasi::class)->name('registrasi');
Route::get('admin/login', AdminLogin::class)->name('adminlogin');
Route::get('admin/editdata', EditData::class)->name('editdata');



