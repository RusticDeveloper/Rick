<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RyMController extends Controller
{
    public function index()
    {
        return view('rickym');
    }
}
