<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IndividualController;
use App\Http\Controllers\InstitutionalController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DenemeController;
use App\Http\Controllers\UniversityDepartmentController;

Route::get('/',[HomepageController::class,'index'])->name('index');

Route::get('category/{title}/{title2}/{id}',[HomepageController::class,'category'])->name('category');
Route::get('study/{title2}/{title3}/{id}',[HomepageController::class,'category'])->name('category');
Route::get('category/{title}/{id}',[HomepageController::class,'post'])->name('post');
Route::get('/category/academic/{title}/{title2}/{id}',[HomepageController::class,'category'])->name('category');
Route::get('/dormitories',[HomepageController::class,'dormitories'])->name('dormitories');
Route::get('/services/{title}/{id}',[HomepageController::class,'category'])->name('category');

Route::get('/company',[CompanyController::class,'index'])->middleware('auth');
Route::post('/company',[CompanyController::class,'company'])->middleware('auth')->name('company');
Route::post('/towns/{id}',[CompanyController::class,'towns'])->middleware('auth')->name('towns');
Route::post('/districts/{id}',[CompanyController::class,'districts'])->middleware('auth')->name('districts');
Route::post('/neighborhoods/{id}',[CompanyController::class,'neighborhoods'])->middleware('auth')->name('neighborhoods');
Route::get('/city',[CompanyController::class,'city'])->middleware('auth');

Route::get('{address}/{id}.htm',[CompanyController::class,'address']);
Route::get('/individual',[IndividualController::class,'dashboard'])->middleware('auth')->name('individualDashboard');
Route::get('/institutional',[InstitutionalController::class,'dashboard'])->middleware('auth')->name('institutionalDashboard');
Route::get('/deneme',[DenemeController::class,'index'])->name('index');
Route::get('/deneme/address',[DenemeController::class,'address'])->name('address');
Route::post('/search/{title}/{id}/{title1}',[CompanyController::class,'search'])->name('search');
Route::get('/departments/{id}',[UniversityDepartmentController::class,'index'])->name('departments');


Route::get('address',[CompanyController::class,'address'])->name('adress');
Route::get('categories/{id}',[CategoryController::class,'categories']);
require __DIR__.'/auth.php';
require __DIR__.'/solaris.php';
