<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicesPagesController;
use App\Http\Controllers\ProjectsPagesController;
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
Route::get('/product_detail/{id}', [PagesController::class,'project_detail']);


Route::prefix('admin')->group(function(){

    Route::get('/', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
    Route::get('/main', [MainPagesController::class, 'view_main'])->name('admin.main');
    Route::post('/main/', [MainPagesController::class, 'update'])->name('admin.main.update');
    Route::get('/services/create', [ServicesPagesController::class, 'create'])->name('admin.services.create');
    Route::post('/services/store', [ServicesPagesController::class, 'store'])->name('admin.services.store');
    Route::get('/services/list', [ServicesPagesController::class, 'view'])->name('admin.services.list');
    Route::get('/services/list/{id}', [ServicesPagesController::class, 'edit'])->name('admin.services.list.edit');
    Route::post('/services/update/{id}', [ServicesPagesController::class, 'update'])->name('admin.services.list.update');
    Route::get('/services/delete/{id}', [ServicesPagesController::class, 'destroy'])->name('admin.services.list.delete');
    Route::get('/projects/create', [ProjectsPagesController::class, 'create'])->name('admin.projects.create');
    Route::post('/projects/store', [ProjectsPagesController::class, 'store'])->name('admin.projects.store');
    Route::get('/projects/list', [ProjectsPagesController::class, 'view'])->name('admin.projects.list');
    Route::get('/projects/edit_project/{id}', [ProjectsPagesController::class, 'edit'])->name('admin.projects.edit_project');
    Route::post('/projects/update_project/{id}', [ProjectsPagesController::class, 'update'])->name('admin.projects.update_project');
    Route::get('/projects/delete_project/{id}', [ProjectsPagesController::class, 'destroy'])->name('admin.projects.delete_project');
    

});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
