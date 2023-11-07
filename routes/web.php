<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ActivityStuationController;
use App\Http\Controllers\SocialmediaController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\MemberController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/', [MainController::class, 'index'])->name('main.home');
Route::get('situations', [MainController::class, 'situations'])->name('situations');
Route::get('activities', [MainController::class, 'activities'])->name('activities');
Route::get('ourVision', [MainController::class, 'ourVision'])->name('ourVision');
Route::get('aboutUs', [MainController::class, 'aboutUs'])->name('aboutUs');
Route::get('contactUs', [MainController::class, 'contactUs'])->name('contactUs');
Route::get('activitySituation/{id}',[MainController::class, 'show'])->name('activitySituation.show');


Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('dashboard/slide/index',[SlideController::class,'index'])->name('dashboard.slide.index');
Route::get('dashboard/slide/create',[SlideController::class,'create'])->name('dashboard.slide.create');
Route::post('dashboard/slide/store',[SlideController::class,'store'])->name('dashboard.slide.store');
Route::get('dashboard/slide/edit/{id}',[SlideController::class, 'edit'])->name('dashboard.slide.edit');
Route::put('dashboard/slide/update/{id}',[SlideController::class, 'update'])->name('dashboard.slide.update');
Route::delete('dashboard/slide/destroy/{id}',[SlideController::class, 'destroy'])->name('dashboard.slide.destroy');

Route::get('dashboard/activityStuation/index',[ActivityStuationController::class,'index'])->name('dashboard.activityStuation.index');
Route::get('dashboard/activityStuation/create',[ActivityStuationController::class,'create'])->name('dashboard.activityStuation.create');
Route::post('dashboard/activityStuation/store',[ActivityStuationController::class,'store'])->name('dashboard.activityStuation.store');
Route::get('dashboard/activityStuation/edit/{id}',[ActivityStuationController::class, 'edit'])->name('dashboard.activityStuation.edit');
Route::put('dashboard/activityStuation/update/{id}',[ActivityStuationController::class, 'update'])->name('dashboard.activityStuation.update');
Route::delete('dashboard/activityStuation/destroy/{id}',[ActivityStuationController::class, 'destroy'])->name('dashboard.activityStuation.destroy');

Route::get('dashboard/member/index',[MemberController::class,'index'])->name('dashboard.member.index');
Route::get('dashboard/member/create',[MemberController::class,'create'])->name('dashboard.member.create');
Route::post('dashboard/member/store',[MemberController::class,'store'])->name('dashboard.member.store');
Route::get('dashboard/member/edit/{id}',[MemberController::class, 'edit'])->name('dashboard.member.edit');
Route::put('dashboard/member/update/{id}',[MemberController::class, 'update'])->name('dashboard.member.update');
Route::delete('dashboard/member/destroy/{id}',[MemberController::class, 'destroy'])->name('dashboard.member.destroy');

Route::get('dashboard/socialMedia/edit',[SocialmediaController::class, 'edit'])->name('dashboard.socialmedia.edit');
Route::put('dashboard/socialMedia/update/{id}',[SocialmediaController::class, 'update'])->name('dashboard.socialmedia.update');


Route::get('dashboard/join/index',[JoinController::class,'index'])->name('dashboard.join.index');
Route::post('contactus/join/store',[JoinController::class,'store'])->name('contactus.join.store');
Route::get('dashboard/join/edit/{id}',[JoinController::class, 'edit'])->name('dashboard.join.edit');
Route::put('dashboard/join/update/{id}',[JoinController::class, 'update'])->name('dashboard.join.update');
Route::get('dashboard/join/show/{id}',[JoinController::class, 'show'])->name('dashboard.join.show');
Route::put('dashboard/join/update/{id}',[JoinController::class, 'update'])->name('dashboard.join.update');
Route::get('dashboard/join/export',[JoinController::class, 'export'])->name('dashboard.join.export');
Route::post('dashboard/join/import',[JoinController::class, 'import'])->name('dashboard.join.import');
