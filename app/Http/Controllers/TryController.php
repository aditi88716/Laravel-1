<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TryController extends Controller
{
    public function Try()
    {
        echo "try";
        return view('try');
    }
}
