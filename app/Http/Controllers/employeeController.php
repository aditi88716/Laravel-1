<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class employeeController extends Controller
{
    public function insert()
    {
    	$data =DB::table('employees')->insert(['name'=>'Rishabh','phone'=>'8982927515','address'=>'Gwalior','email'=>'r@gmail.com','emp_id'=>'16102']);
    	echo $data;
    }


    public function show()
    {

    	$data =DB::table('employees')->get();
    	print_r($data);

    	$data=DB::table('employees')->orderby('id','desc')->get();
    	print_r($data);

    }


    public function showdata()
    {

    	$data =DB::table('employees')->get();
    	//print_r($data);
    	return view('datainsert.employee',compact('data'));


    }
    public function update()
    {
    	$data =DB::table('employees')->where('name','Rishabh')->update(['name'=>'Rishabh Jain']);
    }


    public function delete()
    {
    	$data=DB::table('employees')->where('id','1')->delete();
    	echo $data;
    }
    
}
 