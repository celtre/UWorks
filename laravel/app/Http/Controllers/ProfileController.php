<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;
use App\File;
use App\Subject;
use Validator;
use DB;
use Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $user = \Auth::user();
      $profiles = \DB::table('profiles')
      ->select('*')
      ->where('email',$user->email)->first();
      $subject = Subject::all();
     return view('profile', ['profiles'=>$profiles,'subject'=>$subject]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

      $this -> validate($request, [
            'apellido' => 'max:60',
            'descripcion' => 'max:1000',
            'pais' => 'max:60',
            'ocupacion' => 'max:60',
            'celular' => 'max:20',
            'foto' => 'mimes:jpeg,bmp,png'
        ]);
        $user = \Auth::user();
        $consulta = \DB::table('profiles')
        ->select(['profiles.email','profiles.foto'])
        ->where('email',$user->email)->first();
        $foto = $request->file('foto');

        if(empty($request)){


        $public_path = storage_path();
        $nombre = $user->email.$foto->getClientOriginalName();
        $path = '/app/fotos/'.$nombre;
        $url = $public_path.$path;
      }else{
        $url =$consulta->foto;
        $nombre = "";
      }


         if(empty($consulta)){



         \Storage::disk('local')->put('/foto/'.$nombre,  \File::get($foto));
         $profile = new Profile;
         $profile -> nombre = $user->name;
         $profile -> apellido = $request->apellido;
         $profile -> email = $user->email;
         $profile -> descripcion = $request->descripcion;
         $profile -> pais = $request->pais;
         $profile -> fecha_nacimiento = $request->fechaNac;
         $profile -> ocupacion = $request->ocupacion;
         $profile -> celular = $request->celular;
         $profile -> foto = $url;
         $profile ->save();
         return 'gracias por completar su perfil';
       }else{
         DB::table('profiles')
         ->select(['profiles'])
         ->where('email',$user->name)
         ->update(['apellido' => $request->apellido, 'descripcion' => $request->descripcion,
            'fecha_nacimiento' => $request->fechaNac, 'ocupacion' => $request->ocupacion,
            'celular' => $request->celular, 'foto'=>$url
         ]);
         //\Storage::disk('local')->put('/foto/'.$nombre,  \File::get($foto));
         return 'Usuario exitoso';
       }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
