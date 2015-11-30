<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\File;
use App\User;
use Illuminate\Database\Eloquent\Relations\Relation;

class HomeController extends Controller
{
    public function index(){
        return view('home');

    }
    public function principal(){
      $user = \Auth::user();
      $files = \DB::table('files')
      ->select(['files.email'])
      ->where('email',$user->email)->count();

       return 	view('principal', ['files'=>$files]);
    }
    public function postRegister(){

      return view ('principal');
    }
}
