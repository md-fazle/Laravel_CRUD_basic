<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee',[EmployeeController::class,'index'])->name('employees.index'); 
Route::get('/employee/create',[EmployeeController::class,'create'])->name('employees.create'); 
Route::post('/employee',[EmployeeController::class,'store'])->name('employees.store'); 
Route::get('/employee/{employee}/edit',[EmployeeController::class,'edit'])->name('employees.edit'); 
Route::put('/employee/{employee}/update',[EmployeeController::class,'update'])->name('employees.update'); 
Route::delete('/employee/{employee}/destroy',[EmployeeController::class,'destroy'])->name('employees.destroy'); 

