<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // Aquí puedes agregar más rutas administrativas
    Route::get('/admin/users', function () {
        return view('admin.users.index');
    })->name('admin.users');
    
    Route::get('/admin/courses', function () {
        return view('admin.courses.index');
    })->name('admin.courses');

    Route::get('/cursos/crear', [CursoController::class, 'create'])->name('cursos.create');

    Route::post('/admin/courses', [CursoController::class, 'store'])->name('admin.courses.store');
});




