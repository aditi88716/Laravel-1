<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class conditionController extends Controller
{ 
    public function usingifcondition()
    {
    	//return view('condition.if');
    	$name = "pn infosys";
    	return view('condition.if',compact('name'));
    }


    public function usingelsecondition()
    {
    	//return view('condition.else');
    	//$name = "pn infosys";
    	return view('condition.else');

    }


     public function aelseif()
    {	
    	$name = "pn infosys";
    	return view('condition.elif', compact('name'));
    }


     public function aisset()
    {	
    	$name = "pn infosys";
    	return view('condition.isset', compact('name'));
    }


    public function aempty()
    {
    	$name = "pn infosys";
    	return view('condition.empty',compact('name'));
    }


    public function aunless()
    {
    	$name = "online web tutor";
    	$names=[];
    	return view('condition.unless', compact('name','names'));
    }



    public function bfor()
    {
        //$name="online web tutor ";
        //$names = [];
        return view("loop.for");
    }
    public function bforeach()
    {
        $name="online web tutor ";
        $names = ['vikas','jain','mohit'];
        return view("loop.foreach",compact("name","names"));
    }
    public function bforelse()
    {
        $name="online web tutor ";
        //$names = ["vikas","jain","mohit"];
        $names=[];
        return view("loop.forelse",compact("name","names"));
    }

    public function bwhile()
    {
        $name="online web tutor ";
        $names=[];
        return view("loop.while",compact("name","names"));
    }
    public function loopindex()
    {
        $name = "online web tutor";
        $names = ['vikas','mohit','jain'];
        return view("loop.loopindex",compact("name","names"));
    }
}

 