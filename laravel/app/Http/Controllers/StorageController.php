<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return \View::make('file/file');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
      /*$public_path = storage_path();
      $url = $public_path.'/app/'.$archivo;
      //verificamos si el archivo existe y lo retornamos
      if (Storage::exists($archivo))
      {
          Storage::delete($archivo);
          return route('home');
      }
      //si no se encuentra lanzamos un error 404.
      abort(404);*/
    }


    /**
     * guarda un archivo en nuestro directorio local.
     *
     * @return Response
     */
    public function save(Request $request)
    {

        //obtenemos el campo file definido en el formulario
        $file = $request->file('file');
        $tiempo = localtime();
        //obtenemos el nombre del archivo
        $tConvertido = implode(" ", $tiempo);
        $nombre = $tConvertido.$file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        return view('home');
    }



}
