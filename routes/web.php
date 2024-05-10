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
Route::get('/Subject/{id}',[SubjectsController::class,'get'])->name('watch');
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
    Route::get('/subjects',[SubjectsController::class,'spadminindex'])->name('spcontent');
    Route::get('/subjects/add',[SubjectsController::class,'spcreate'])->name('spaddsubject');
    Route::post('/subjects/store',[SubjectsController::class,'spstore'])->name('spstore.subject');
    Route::get('/subjects/sh/{id}',[SubjectsController::class,'spshow'])->name('spview.subject');
    Route::get('/subjects/edit/{id}',[SubjectsController::class,'spedit'])->name('spedit.subject');
    Route::post('/subjects/update/{id}',[SubjectsController::class,'spupdate'])->name('spupdate.subject');
    Route::get('/subjects/delete/{id}',[SubjectsController::class,'spdestroy'])->name('spdelete.subject');
    
    Route::get('/notes',[NotesController::class,'spadminindex'])->name('spnotes');
    Route::get('/notes/add',[NotesController::class,'spcreate'])->name('spaddnotes');
    Route::post('/notes/store',[NotesController::class,'spstore'])->name('spstore.notes');
    Route::get('/notes/show/{id}',[NotesController::class,'spshow'])->name('spview.notes');
    Route::get('/notes/edit/{id}',[NotesController::class,'spedit'])->name('spedit.notes');
    Route::post('/notes/update/{id}',[NotesController::class,'spupdate'])->name('spupdate.notes');
    Route::get('/notes/delete/{id}',[NotesController::class,'spdestroy'])->name('spdelete.notes');
    
    
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});



// ********** Sub Admin Routes *********
Route::group(['prefix' => 'sub-admin','middleware'=>['web','isSubAdmin']],function(){
    Route::get('/dashboard',[SubAdminController::class,'dashboard']);
    Route::get('/subjects',[SubjectsController::class,'sbadminindex'])->name('sbcontent');
    Route::get('/subjects/add',[SubjectsController::class,'sbcreate'])->name('sbaddsubject');
    Route::post('/subjects/store',[SubjectsController::class,'sbstore'])->name('sbstore.subject');
    Route::get('/subjects/sh/{id}',[SubjectsController::class,'sbshow'])->name('sbview.subject');
    Route::get('/subjects/edit/{id}',[SubjectsController::class,'sbedit'])->name('sbedit.subject');
    Route::post('/subjects/update/{id}',[SubjectsController::class,'sbupdate'])->name('sbupdate.subject');
    Route::get('/subjects/delete/{id}',[SubjectsController::class,'sbdestroy'])->name('sbdelete.subject');
    
    Route::get('/notes',[NotesController::class,'sbadminindex'])->name('sbnotes');
    Route::get('/notes/add',[NotesController::class,'sbcreate'])->name('sbaddnotes');
    Route::post('/notes/store',[NotesController::class,'sbstore'])->name('sbstore.notes');
    Route::get('/notes/show/{id}',[NotesController::class,'sbshow'])->name('sbview.notes');
    Route::get('/notes/edit/{id}',[NotesController::class,'sbedit'])->name('sbedit.notes');
    Route::post('/notes/update/{id}',[NotesController::class,'sbupdate'])->name('sbupdate.notes');
    Route::get('/notes/delete/{id}',[NotesController::class,'sbdestroy'])->name('sbdelete.notes');
    Route::get('/users',[SubAdminController::class,'users'])->name('subAdminUsers');
    Route::get('/manage-role',[SubAdminController::class,'manageRole'])->name('manage');
    Route::post('/update-role',[SubAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);
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
});

// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);
});
