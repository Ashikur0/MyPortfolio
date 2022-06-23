<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MainPagesController;
use App\Http\Controllers\ServicesPagesController;
use App\Http\Controllers\ProjectsPagesController;
use App\Http\Controllers\ExperiencesPagesController;
use App\Http\Controllers\PersonalInfoPagesController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

//Index Page Route
Route::get('/',[PagesController::class,'index_view'])->name('myportfolio');
Route::get('/project_detail/{id}', [PagesController::class,'project_detail']);
Route::post('/feedback/store',[PagesController::class,'store'])->name('feedback.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

//Admin Pages Route
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
    Route::get('/experiences/add', [ExperiencesPagesController::class, 'create'])->name('admin.experiences.add');
    Route::post('/experiences/store', [ExperiencesPagesController::class, 'store'])->name('admin.experiences.store');
    Route::get('/experiences/list', [ExperiencesPagesController::class, 'view'])->name('admin.experiences.list');
    Route::get('/experiences/edit_experience/{id}', [ExperiencesPagesController::class, 'edit'])->name('admin.experiences.edit_experience');
    Route::post('/experiences/update_experiences/{id}', [ExperiencesPagesController::class, 'update'])->name('admin.experiences.update_experience');
    Route::get('/experiences/delete/{id}', [ExperiencesPagesController::class, 'destroy'])->name('admin.experiences.delete_experience');
    Route::get('/personalinfo/create', [PersonalInfoPagesController::class, 'create'])->name('admin.personalinfo.add');
    Route::post('/personalinfo/store', [PersonalInfoPagesController::class, 'store'])->name('admin.personalinfo.store');
    Route::get('/personalinfo/list', [PersonalInfoPagesController::class, 'view'])->name('admin.personalinfo.list');
    Route::get('/personalinfo/edit_info/{id}', [PersonalInfoPagesController::class, 'edit'])->name('admin.personalinfo.edit_info');
    Route::post('/personalinfo/update_info/{id}', [PersonalInfoPagesController::class, 'update'])->name('admin.personalinfo.update_info');
    Route::get('/personalinfo/delete/{id}', [PersonalInfoPagesController::class, 'destroy'])->name('admin.personalinfo.delete_info');

    Route::get('/view/feedback', [PagesController::class, 'view'])->name('admin.view.feedback');

  });

    
});
