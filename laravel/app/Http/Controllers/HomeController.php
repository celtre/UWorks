<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('home');

    }
    public function principal(){
       return view ('principal');
    }
    public function postRegister(){
      return view ('principal');
    }
}
