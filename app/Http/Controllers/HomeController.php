<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function welcome(){
        $client=Client::all();
        var_dump($client);
        return view('welcome');
    }
    
}
