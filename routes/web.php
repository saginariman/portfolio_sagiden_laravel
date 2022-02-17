<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyProjectsController;
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

Route::get('/', [HomeController::class, 'upload'])->name('home_page');

Route::get('/my_projects', [MyProjectsController::class, 'uploadProjects'])->name('my_projects_page');

Route::get('/my_projects/{id}', [MyProjectsController::class, 'showProject'])->name('one_project_page');

Route::get('/comand', function () {
  Artisan::call('storage:link');
});


Route::get('/dark', [HomeController::class, 'dark_upload'])->name('dark_home_page');

Route::get('/dark_my_projects', [MyProjectsController::class, 'dark_uploadProjects'])->name('dark_my_projects_page');

Route::get('/dark_my_projects/{id}', [MyProjectsController::class, 'dark_showProject'])->name('dark_one_project_page');
