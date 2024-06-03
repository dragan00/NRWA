<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\JobHistoryController;

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
    return view('welcome');
});

Route::get('/regions', [RegionController::class, 'index'])->name('regions.index');
Route::get('/regions/create', [RegionController::class, 'create'])->name('regions.create');
Route::post('/regions', [RegionController::class, 'store'])->name('regions.store');
Route::get('/regions/{region}/edit', [RegionController::class, 'edit'])->name('regions.edit');
Route::put('/regions/{region}', [RegionController::class, 'update'])->name('regions.update');
Route::delete('/regions/{region}', [RegionController::class, 'destroy'])->name('regions.destroy');

Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');
Route::get('/countries/create', [CountryController::class, 'create'])->name('countries.create');
Route::post('/countries', [CountryController::class, 'store'])->name('countries.store');
Route::get('/countries/{country}/edit', [CountryController::class, 'edit'])->name('countries.edit');
Route::put('/countries/{country}', [CountryController::class, 'update'])->name('countries.update');
Route::delete('/countries/{country}', [CountryController::class, 'destroy'])->name('countries.destroy');

// Write routes for jobs
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
Route::put('/jobs/{job}', [JobController::class, 'update'])->name('jobs.update');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('jobs.show');

// Write routes for departments
Route::get('/departments', [DepartmentController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentController::class, 'create'])->name('departments.create');
Route::post('/departments', [DepartmentController::class, 'store'])->name('departments.store');
Route::get('/departments/{department}/edit', [DepartmentController::class, 'edit'])->name('departments.edit');
Route::put('/departments/{department}', [DepartmentController::class, 'update'])->name('departments.update');
Route::delete('/departments/{department}', [DepartmentController::class, 'destroy'])->name('departments.destroy');
Route::get('/departments/{department}', [DepartmentController::class, 'show'])->name('departments.show');

// Write routes for employees
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');
Route::get('/employees/{employee}', [EmployeeController::class, 'show'])->name('employees.show');

// Write routes for locations
Route::get('/locations', [LocationController::class, 'index'])->name('locations.index');
Route::get('/locations/create', [LocationController::class, 'create'])->name('locations.create');
Route::post('/locations', [LocationController::class, 'store'])->name('locations.store');
Route::get('/locations/{location}/edit', [LocationController::class, 'edit'])->name('locations.edit');
Route::put('/locations/{location}', [LocationController::class, 'update'])->name('locations.update');
Route::delete('/locations/{location}', [LocationController::class, 'destroy'])->name('locations.destroy');
Route::get('/locations/{location}', [LocationController::class, 'show'])->name('locations.show');

// Write routes for job_history
Route::get('/job_history', [JobHistoryController::class, 'index'])->name('job_history.index');
Route::get('/job_history/create', [JobHistoryController::class, 'create'])->name('job_history.create');
Route::post('/job_history', [JobHistoryController::class, 'store'])->name('job_history.store');
Route::get('/job_history/{job_history}/edit', [JobHistoryController::class, 'edit'])->name('job_history.edit');
Route::put('/job_history/{job_history}', [JobHistoryController::class, 'update'])->name('job_history.update');
Route::delete('/job_history/{job_history}', [JobHistoryController::class, 'destroy'])->name('job_history.destroy');
Route::get('/job_history/{job_history}', [JobHistoryController::class, 'show'])->name('job_history.show');
