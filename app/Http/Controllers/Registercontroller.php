<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Request\registerrequest;
use app\models\user;

class Registercontroller extends Controller
{
 public funtion sow(){
 	return view('auth.register');
 }
 public funtion register(registerrequest $Request){
 	$user = user::create($Request->validated());
 }
}
