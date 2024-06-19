<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\NoteController as AdminNoteController;
use App\Http\Controllers\admin\LoginController as AdminLoginController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::resource('/notes', NoteController::class);

Route::group(['prefix' => 'account'], function () {
      // Guest Middleware
      Route::group(['middleware' => 'guest'], function () {
            Route::get('login', [LoginController::class, 'login'])->name('account.login');
            Route::post('authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
            Route::get('register', [LoginController::class, 'register'])->name('account.register');
            Route::post('create', [LoginController::class, 'create'])->name('account.create');
      });

      // Auth Middleware
      Route::group(['middleware' => 'auth'], function () {

            Route::get('logout', [LoginController::class, 'logout'])->name('account.logout');
      });
});

Route::group(['prefix' => 'admin'], function () {
      // Guest Middleware
      Route::group(['middleware' => 'admin.guest'], function () {
            Route::get('login', [AdminLoginController::class, 'login'])->name('admin.login');
            Route::post('authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
      });

      // Auth Middleware
      Route::group(['middleware' => 'admin.auth'], function () {
            Route::resource('user', UserController::class);

            Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
            Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

            // Admin Note
            Route::get('note', [AdminNoteController::class, 'index'])->name('admin.note');
            Route::post('note/{note}', [AdminNoteController::class, 'store'])->name('admin.note.store');
            Route::patch('note/{note}/edit', [AdminNoteController::class, 'update'])->name('admin.note.update');
            Route::delete('note/{note}', [AdminNoteController::class, 'destroy'])->name('admin.note.destroy');
      });
});
