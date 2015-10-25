<?php

namespace App\Http\Controllers;

use App\File;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use  Illuminate\Http\Request;
use DB;
use Storage;

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
    public function create(Request $request)
    {
        //
    }


    public function download($archivo)
    {
      $public_path = storage_path();
      $url = $public_path.'/app/'.$archivo;
      //verificamos si el archivo existe y lo retornamos
      if (Storage::exists($archivo))
      {
          return response()->download($url);
      }
      //si no se encuentra lanzamos un error 404.
      abort(404);
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
    public function show()
    {
      $files = File::paginate(5);
      return 	view('file/myfiles', ['files' => $files]);
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
    public function destroy($archivo)
    {
      $public_path = storage_path();
      //$url = "$tipo/$materia/";
       $url = $public_path.'/app/'.$archivo;
      //verificamos si el archivo existe y lo retornamos
      if (file_exists($url))
      {
          Storage::delete($archivo);
          return 'Se borro con exito';
      }else{
        return abort (404);
      }

      //si no se encuentra lanzamos un error 404.
    return 'No se deberia llegar aquí';
    }


    /**
     * guarda un archivo en nuestro directorio local.
     *
     * @return Response
     */
    public function save(Request $request)
    {

      $this ->validate($request, [
            'nombre' => 'required|max:60',
            'descripcion' => 'required|max:1000',
            'tipo' => 'required',
            'materia' => 'required',
            'file' => 'required'
        ]);
      //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
       $tiempo = localtime();
       //obtenemos el nombre del archivo
       $tConvertido = implode(" ", $tiempo);
       $nombre = $tConvertido.$file->getClientOriginalName();
       $tipo = $_POST['tipo'];
       $materia = $_POST['materia'];
       $path="$tipo/$materia/";
       $url =  $path;
       $hash = hash_file('md5', $file);
       $consulta = DB::table('files')->where('hash',$hash)->get();
       $consulta1 = DB::table('files')->where('hash', $hash)->first();

        $files =new File;
       //indicamos que queremos guardar un nuevo archivo en el disco local
       if (!file_exists($url))
       {
         mkdir($path,0700,true);

       if($consulta != '[]'){

         $files -> nombre = $request->nombre;
         $files -> descripcion = $request->descripcion;
         $files -> tipo = $request->tipo;
         $files -> materia = $request->materia;
         $files -> nombre_original = $nombre;
         $files -> hash = $hash;
         $files -> path = "";
         $files ->save();
       }else{
         \Storage::disk('local')->put($url.$nombre,  \File::get($file));
         $files -> nombre = $request->nombre;
         $files -> descripcion = $request->descripcion;
         $files -> tipo = $request->tipo;
         $files -> materia = $request->materia;
         $files -> nombre_original = $nombre;
         $files -> hash = $hash;
         $files -> path = $url.$nombre;
         $files ->save();
       }
     }else{

       if($consulta != '[]'){

         $files -> nombre = $request->nombre;
         $files -> descripcion = $request->descripcion;
         $files -> tipo = $request->tipo;
         $files -> materia = $request->materia;
         $files -> nombre_original = $nombre;
         $files -> hash = $hash;
         $files -> path = "";
         $files ->save();
       }else{
         \Storage::disk('local')->put($url.$nombre,  \File::get($file));
         $files -> nombre = $request->nombre;
         $files -> descripcion = $request->descripcion;
         $files -> tipo = $request->tipo;
         $files -> materia = $request->materia;
         $files -> nombre_original = $nombre;
         $files -> hash = $hash;
         $files -> path = $url.$nombre;
         $files ->save();
       }
     }


       return view('profile');

    }





}
