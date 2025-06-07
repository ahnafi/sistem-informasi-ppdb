<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, "index"])->name('home');
Route::get('/profile', [ProfileController::class, "profile"])->name('home.profile');
Route::get('/contact', [ProfileController::class, "contact"])->name('home.contact');
Route::get('/orgstructure', [ProfileController::class, "orgstructure"])->name('home.orgstructure');
Route::get('/teachers', [ProfileController::class, "teachers"])->name('home.teachers');
Route::post('/contact', [ProfileController::class, "sendContact"])->name('home.contact.send');
Route::get('/facility', [ProfileController::class, "facility"])->name('home.facility');
Route::get('/academics', [ProfileController::class, "academics"])->name('home.academics');
Route::get('/student-affairs', [ProfileController::class, "studentaffairs"])->name('home.studentaffairs');
Route::get('/calendar-academics', [ProfileController::class, "calendar"])->name('home.calendar.academic');

Route::get('/registration', [RegistrationController::class, "index"])->name('registration');
Route::get('/registration/form', [RegistrationController::class, "form"])->name('registration.form');
Route::post('/registration/form', [RegistrationController::class, "formStore"])->name('registration.submit');
Route::get("/check", [RegistrationController::class, "check"])->name('registration.check');
Route::get("/check/result", [RegistrationController::class, "checkResult"])->name('registration.check.result');

Route::get('/article', [ArticleController::class, "index"])->name('article');
Route::get('/article/search', [ArticleController::class, "search"])->name('article.search');
Route::get('/article/all', [ArticleController::class, 'allArticles'])->name('articles.all');

Route::get('/article/authors', [ArticleController::class, 'allAuthors'])->name('article.authors');
Route::get('/article/author/{author}', [ArticleController::class, 'authorArticles'])->name('article.author');
Route::get('/article/{article:slug}', [ArticleController::class, "detail"])->name('article.detail');