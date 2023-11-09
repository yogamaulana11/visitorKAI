<?php


use App\Livewire\Admin\AdminLogin;
use App\Livewire\Index;
use App\Livewire\LandingPage;
use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

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


Route::get('/', LandingPage::class)->name('landingpage');
Route::get('login', Login::class)->name('login');
Route::get('register', Register::class)->name('register');

