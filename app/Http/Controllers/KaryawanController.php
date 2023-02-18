<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // create
    public function create_(){
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
    }

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

    // update
    public function update_(){
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
    }

    public function read_(){
        $kry = Karyawan::get();
        return $kry;
    }
}
