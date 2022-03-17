<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\EmployeeDetailsController;

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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('home', [HomeController::class, 'index'])->name('home');

// Department
Route::get('/department', [DepartmentController::class, 'index'])->name('department');
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department/store', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('/department/update/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::get('/department/destroy/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');

// PositionController
Route::get('/position', [PositionController::class, 'index'])->name('position');
Route::get('/position/create', [PositionController::class, 'create'])->name('position.create');
Route::post('/position/store', [PositionController::class, 'store'])->name('position.store');
Route::get('/position/edit/{id}', [PositionController::class, 'edit'])->name('position.edit');
Route::post('/position/update/{id}', [PositionController::class, 'update'])->name('position.update');
Route::get('/position/destroy/{id}', [PositionController::class, 'destroy'])->name('position.destroy');

// QualificationController
Route::get('/qualification', [QualificationController::class, 'index'])->name('qualification');
Route::get('/qualification/create', [QualificationController::class, 'create'])->name('qualification.create');
Route::post('/qualification/store', [QualificationController::class, 'store'])->name('qualification.store');
Route::get('/qualification/edit/{id}', [QualificationController::class, 'edit'])->name('qualification.edit');
Route::post('/qualification/update/{id}', [QualificationController::class, 'update'])->name('qualification.update');
Route::get('/qualification/destroy/{id}', [QualificationController::class, 'destroy'])->name('qualification.destroy');

// EmployeeController
Route::get('/employee', [EmployeeDetailsController::class, 'index'])->name('employee');
Route::get('/employee/create', [EmployeeDetailsController::class, 'create'])->name('employee.create');
