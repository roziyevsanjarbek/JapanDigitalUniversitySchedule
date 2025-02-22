<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupStudentController;
use App\Http\Controllers\GroupSubjectController;
use App\Http\Controllers\GroupTeacherController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SubjectTeacherController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);



Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('logout', [AuthController::class,'logout']);

    Route::resource('groups', GroupController::class);
    Route::resource('group-subjects', GroupSubjectController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('group-students', GroupStudentController::class);
    Route::resource('subject-teachers', SubjectTeacherController::class);

});
