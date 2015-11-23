<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Profile;
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
     return view('profile');
    }
    public function indexEdit()
    {
     return view('profile/edit');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

      $this -> validate($request, [
            'nombre' => 'required|max:60',
            'apellido' => 'required|max:60',
            'descripcion' => 'required|max:1000',
            'pais' => 'required|max:60',
            'fechaNac' => 'required',
            'ocupacion' => 'required|max:60',
            'celular' => 'required|max:20',
            'foto' => 'mimes:jpeg,bmp,png'
        ]);
         $foto = $request->file('foto');
         $tiempo = localtime();
         //obtenemos el nombre del archivo
         $tConvertido = implode(" ", $tiempo);
         $nombre = $tConvertido.$foto->getClientOriginalName();
         $path = '/app/fotos/'.$nombre;
         \Storage::disk('local')->put($nombre,  \File::get($foto));
         $profile = new Profile;
         $profile -> nombre = $request->nombre;
         $profile -> apellido = $request->apellido;
         $profile -> descripcion = $request->descripcion;
         $profile -> pais = $request->pais;
         $profile -> fecha_nacimiento = $request->fechaNac;
         $profile -> ocupacion = $request->ocupacion;
         $profile -> celular = $request->celular;
         $profile -> foto = $nombre;
         $profile ->save();
         return view('principal');
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
