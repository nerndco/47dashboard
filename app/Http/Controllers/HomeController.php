<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }


    public function getGuzzle(){
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('https://publisher-api.spotxchange.com/1.0/Publisher/Login', 
            ['body' => json_encode(
                [
                    'username' => 'atc8868@gmail.com',
                    'password' => 'P3rpetual111!'
                ]
             )]
        );

        return $result;
    }
}