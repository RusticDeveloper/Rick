<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GitPortfolioController extends Controller
{
    public function index()
    {
        $rp=Http::get('https://api.github.com/users/rusticdeveloper/repos');
        // echo var_dump($response[0]['name']);
        $responses= strval($rp->getBody());
        // $rp->
        $response=(json_decode($responses,true));
        // echo var_dump(json_decode($responses,true));
        return view('portfolio',compact('response'));
    }
    public function show()
    {
        return view('portfolio');
    }
}
