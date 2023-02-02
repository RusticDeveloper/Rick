<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RyMController extends Controller
{
    public $url = 'https://rickandmortyapi.com/api';
    public function index()
    {
        $response=Http::get($this->url.'/character/1');
        // echo $response;
        return view('rickym',compact('response'));
    }
    public function show()
    {
        $characterUrl=explode('/',request('urlc'));
        $characterID = CharacterDefiner(request('status'), end($characterUrl));
        // echo $characterID;
        // $value=="next"?$this->setBuddyId($next):$this->setBuddyId($next);
        $response = Http::get($this->url.'/character/'.$characterID);
        // // $data = $response->json();
        return view('rickym',compact('response'));
    }
    

    
}
