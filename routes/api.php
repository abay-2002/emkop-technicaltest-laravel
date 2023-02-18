<?php

use App\Http\Controllers\KaryawanController;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Create
Route::post('/karyawan/insert', [
    KaryawanController::class, 'create_'
]);

// Read
Route::get('/karyawan',[
    KaryawanController::class, 'read_'
]);

// Update
Route::post('/karyawan/update', [
    KaryawanController::class, 'update_'
]);

// Delete
Route::post('/karyawan/delete/{id}', [
    KaryawanController::class, 'delete_'
]);

// Search
Route::get('/karyawan/search/{userId}', function($userId){
    $kry = Karyawan::get()->where('id', $userId)->toArray();
    return array_reverse($kry);    
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
