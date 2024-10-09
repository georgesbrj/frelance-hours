<?php

use App\Http\Controllers\ProjectsControler;
use Illuminate\Support\Facades\Route;
 

Route::get('/',[ProjectsControler::class,'index'])->name('projects.index');
Route::get('/project/{project}',[ProjectsControler::class,'show'])->name('projects.show');