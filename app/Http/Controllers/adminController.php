<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function login()
   {
   		return view('Admin.login');
   }
    public function register()
   {
   		return view('Admin.register');
   }
   public function dashboard()
   {
   		return view('Admin.dashboard');
   }
   public function student()
   {
   		return view('Admin.add_student');
   }
   public function view_student()
   {
   		return view('Admin.view_student');
   }
    public function add_teacher()
   {
   		return view('Admin.add_teacher');
   }
   public function view_teacher()
   {
   		return view('Admin.view_teacher');
   }
}
