<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ActivityController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'layout/index');
Route::get('/members', [MemberController::class, 'listMembers'])->name('layout.members');
Route::view('/gallery', 'layout.gallery');
Route::get('/publication', [PublicationController::class, 'listPublication'])->name('layout.publication');

// Admin Authentication
Route::view('/admin', 'admin/login');

// Members Routes
Route::get('/admin/members', [MemberController::class, 'index'])->name('Member');
Route::get('/admin/members/add', [MemberController::class, 'create'])->name('members.create');
Route::post('/admin/members', [MemberController::class, 'store'])->name('members.store');
Route::get('/admin/members/{member}/edit', [MemberController::class, 'edit'])->name('members.edit');
Route::put('/admin/members/{member}', [MemberController::class, 'update'])->name('members.update');
Route::delete('/admin/members/{member}', [MemberController::class, 'destroy'])->name('members.destroy');

// Publications Routes
Route::get('/admin/publications', [PublicationController::class, 'index'])->name('Publication');
Route::get('/admin/publications/add', [PublicationController::class, 'create'])->name('publications.create');
Route::post('/admin/publications', [PublicationController::class, 'store'])->name('publications.store');
Route::get('/admin/publications/{publication}/edit', [PublicationController::class, 'edit'])->name('publications.edit');
Route::put('/admin/publications/{publication}', [PublicationController::class, 'update'])->name('publications.update');
Route::delete('/admin/publications/{publication}', [PublicationController::class, 'destroy'])->name('publications.destroy');

// Activities Routes
Route::get('/admin/activities', [ActivityController::class, 'index'])->name('Activity');
Route::get('/admin/activities/add', [ActivityController::class, 'create'])->name('activities.create');
Route::post('/admin/activities', [ActivityController::class, 'store'])->name('activities.store');
Route::get('/admin/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
Route::put('/admin/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
Route::delete('/admin/activities/{activity}', [ActivityController::class, 'destroy'])->name('activities.destroy');

// RESTful Resource
Route::resource('members', MemberController::class)->except(['index', 'create', 'store']);
Route::resource('publications', PublicationController::class)->except(['index', 'create', 'store']);
