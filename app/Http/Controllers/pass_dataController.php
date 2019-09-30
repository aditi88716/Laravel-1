<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pass_dataController extends Controller
{
    public function usingarray()
    {
    	//return view('pass_data.using_array');

    	$data1 = ['vikas','rohit','jain'];
    	$name = "pninfosys";

    	//usingarray
    	//return view('pass_data.using_array',array('pn' => $data1,'nm'=>$name ));

    	//compact array
    	//return view('pass_data.using_array',compact('data1','name'));
    	
    	//with
    	//return view('pass_data.using_array',with(['wi'=>$data1,'na'=>$name]));

    	//withName
    	return view('pass_data.using_array')->withData1($data1)->withName($name);

    }
}
