<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, "index"])->name('home');
Route::get('/about', [ProfileController::class, "about"])->name('home.about');
Route::get('/contact', [ProfileController::class, "contact"])->name('home.contact');
Route::post('/contact', [ProfileController::class, "sendContact"])->name('home.contact.send');

Route::get('/registration', [RegistrationController::class, "index"])->name('registration');
Route::post('/registration', [RegistrationController::class, "registration"])->name('registration.submit');
Route::get("/check", [RegistrationController::class, "check"])->name('registration.check');
Route::get("/check/result", [RegistrationController::class, "checkResult"])->name('registration.check.result');

Route::get('/article', [ArticleController::class, "index"])->name('article');
Route::get('/article/search', [ArticleController::class, "search"])->name('article.search');
Route::get('/article/{article:slug}', [ArticleController::class, "detail"])->name('article.detail');
