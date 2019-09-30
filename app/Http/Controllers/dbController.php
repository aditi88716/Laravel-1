<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class dbController extends Controller
{
    public function queryrun()
    {
    	// $data =DB::table('students')->insert(['name'=>'Rishabh','rollno'=>'0902it161023','address'=>'Gwalior','email'=>'r@gmail.com']);
    	// echo $data;
        echo "string";
    }

    public function show()
    {

    	$data =DB::table('students')->get();
    	print_r($data);

    	$data=DB::table('students')->orderby('id','desc')->get();
    	print_r($data);

    }

    public function showdata()
    {

    	$data =DB::table('students')->get();
    	//print_r($data);
    	return view('datainsert.showdata',compact('data'));


    }
    public function update()
    {
    	$data =DB::table('students')->where('id','6')->update(['id'=>'4']);
    }

    public function delete()
    {
    	$data=DB::table('students')->where('id','4')->delete();
    	echo $data;
    }
    
}
