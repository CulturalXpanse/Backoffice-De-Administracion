<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Autenticacion;
use App\Http\Controllers\UserController;

Route::get('/login', function () { return view('login'); });
Route::middleware(Autenticacion::class ) -> group(function(){
    Route::get('/backoffice', function () { return view('backoffice');});
    Route::get('/logout',[UserController::class,"Logout"]);
});