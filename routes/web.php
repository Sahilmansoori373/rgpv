<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\NotesController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/Subject',[SubjectsController::class,'index'])->name('show');
Route::get('/notes/{id}',[NotesController::class,'view'])->name('show.notes');

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
// Route::get('/login',function(){
//     return redirect('/login');
// });
Route::get('/log',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminController::class,'dashboard']);

    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    Route::get('/subjects',[SubjectsController::class,'adminindex'])->name('content');
    Route::get('/subjects/add',[SubjectsController::class,'create'])->name('addsubject');
    Route::post('/subjects/store',[SubjectsController::class,'store'])->name('store.subject');
    Route::get('/subjects/show/{id}',[SubjectsController::class,'show'])->name('view.subject');
    Route::get('/subjects/edit/{id}',[SubjectsController::class,'edit'])->name('edit.subject');
    Route::post('/subjects/update/{id}',[SubjectsController::class,'update'])->name('update.subject');
    Route::get('/subjects/delete/{id}',[SubjectsController::class,'destroy'])->name('delete.subject');
    
    Route::get('/notes',[NotesController::class,'adminindex'])->name('notes');
    Route::get('/notes/add',[NotesController::class,'create'])->name('addnotes');
    Route::post('/notes/store',[NotesController::class,'store'])->name('store.notes');
    Route::get('/notes/show/{id}',[NotesController::class,'show'])->name('view.notes');
    Route::get('/notes/edit/{id}',[NotesController::class,'edit'])->name('edit.notes');
    Route::post('/notes/update/{id}',[NotesController::class,'update'])->name('update.notes');
    Route::get('/notes/delete/{id}',[NotesController::class,'destroy'])->name('delete.notes');
    
    
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin','middleware'=>['web','isSubAdmin']],function(){
    Route::get('/dashboard',[SubAdminController::class,'dashboard']);

    Route::get('/users',[SubAdminController::class,'users'])->name('subAdminUsers');
    Route::get('/manage-role',[SubAdminController::class,'manageRole'])->name('manage');
    Route::post('/update-role',[SubAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);
});
