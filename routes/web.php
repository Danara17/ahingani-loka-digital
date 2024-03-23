<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MasterFiturController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [HalamanController::class, "index"])->name("index");
Route::get("/sign-in", [HalamanController::class, "sign_in"])->name("sign-in");
Route::post("/auth", [AuthController::class, "login"])->name("auth-user");
Route::get("/dashboard", [HalamanController::class, "dashboard"])->name("dashboard");

Route::prefix('project')->group(function () {
    Route::get('/', [ProjectController::class, 'page'])->name('project');
    Route::get('/create', [ProjectController::class, 'create_project_page'])->name('create-project');
    Route::post('/create', [ProjectController::class, 'create_project_post'])->name('create__project');
});

Route::prefix('master-fitur')->group(function () {
    Route::get("/", [MasterFiturController::class, "page"])->name("master-fitur");
    Route::get("/edit/{id}", [MasterFiturController::class, "edit_page"])->name("edit-master-fitur");
    Route::post("/edit", [MasterFiturController::class, "edit_post"])->name("edit__master-fitur");
    Route::get("/add", [MasterFiturController::class, "add_page"])->name("add-master-fitur");
    Route::post("/add", [MasterFiturController::class, "add_post"])->name("add__master-fitur");
});