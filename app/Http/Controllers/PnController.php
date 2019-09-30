<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PnController extends Controller
{
    public function pn()
    {
        echo "adti";
        return view('pn');
    }
    public function try()
    {
        return view('try');
    }
    public function about()
    {
        return view('about');
    }
    public function courses()
    {
        return view('courses');
    }
    public function teacher()
    {
        return view('teacher');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function blog()
    {
        return view('blog');
    }
    public function contact()
    {
        return view('contact');
    }
}
