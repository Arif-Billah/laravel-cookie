<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class ProfileController extends Controller
{
    Public function index($id){
         $name = "Donal Trump";
         $age = "75";
         $data=[
            "id"=> $id,
            "name"=> $name,
            "age"=> $age
            
         ];
    $name = 'access_token';
    $value = '123_xyz';
    $currentTimeDhaka = Carbon::now('Asia/Dhaka');
    $minutes =5; // Duration in minutes
    $path = '/';
    $domain = $_SERVER['SERVER_NAME']; 
    $secure = false; 
    $httpOnly = true;

    $currentTimeDhaka = Carbon::now('Asia/Dhaka');
    $expirationTimeDhaka = $currentTimeDhaka->copy()->addMinutes($minutes);
   
    $cookie = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    
    return response()->json($data, 200)->withCookie($cookie);
         
    }
}
