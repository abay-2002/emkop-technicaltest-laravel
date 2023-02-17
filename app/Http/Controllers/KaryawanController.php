<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // delete
    public function delete_($id){
       return DB::table('karyawan')->where('id', $id)->delete();
    }

    // insert
    public function insert_($name, $dob, $gender, $department){
        DB::table('karyawan')->insert(
            array(
                   'name' => $name,
                   'dob' => $dob,
                   'gender' => $gender,
                   'department' => $department
            )
       );
    }

    public function test_($name){
        return $name;
    }
}
