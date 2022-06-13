<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicesPagesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[PagesController::class,'index_view']);
Route::get('/admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [MainPagesController::class, 'view_main'])->name('admin.main');
Route::post('/admin/main/', [MainPagesController::class, 'update'])->name('admin.main.update');
Route::get('/admin/services/create', [ServicesPagesController::class, 'create'])->name('admin.services.create');
Route::post('/admin/services/store', [ServicesPagesController::class, 'store'])->name('admin.services.store');
Route::get('/admin/services/list', [ServicesPagesController::class, 'view'])->name('admin.services.list');
Route::get('/admin/services/list/{id}', [ServicesPagesController::class, 'edit'])->name('admin.services.list.edit');
Route::post('/admin/services/update/{id}', [ServicesPagesController::class, 'update'])->name('admin.services.list.update');
Route::get('/admin/services/delete/{id}', [ServicesPagesController::class, 'destroy'])->name('admin.services.list.delete');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
