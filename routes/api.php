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
Route::post('/karyawan/insert', function(){
    $name = request("name");
    $dob = request("dob");
    $gender = request("gender");
    $department = request("department");
    DB::table('karyawan')->insert(
        array(
                'name' => $name,
                'dob' => $dob,
                'gender' => $gender,
                'department' => $department
        )
    );
    return redirect('http://localhost:3000/');
});

// Read
Route::get('/karyawan', function(){
    $kry = Karyawan::get();
    return $kry;
});

// Update
Route::post('/karyawan/update', function(){
    $id = request("id");
    $name = request("name");
    $dob = request("dob");
    $gender = request("gender");
    $department = request("department");
    DB::table('karyawan')
    ->where('id', $id)  // temukan user berdasarkan id.
    ->update(array(
        'name' => $name,
        'dob' => $dob,
        'gender' => $gender,
        'department' => $department
    ));  // update the record in the DB. 
    return redirect('http://localhost:3000/read-delete-update-search');
});

// Delete
Route::post('/karyawan/delete/{id}', [
    KaryawanController::class, 'delete_'
]);




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
