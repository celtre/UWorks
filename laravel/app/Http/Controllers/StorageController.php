<?php

namespace App\Http\Controllers;

use App\File;
use App\Subject;
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
      $subject = Subject::all();
      return view('file/file', ['subject' => $subject]);
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
      $url= \DB::table('files')
      ->select(['files.path','files.materia'])
      ->where('nombre_original',$archivo)->first();
      //$url = "$tipo/$materia/";
      $consulta2 = \DB::table('subjects')
      ->select(['subjects.descargas'])
      ->where('nombre',$url->materia)->first();//Consulta para obtener el numero de dercargas
      $subject = new Subject;
      $count = $consulta2->descargas;
     $url1=$public_path."/app/".$url->path;

      //verificamos si el archivo existe y lo retornamos
      if (Storage::exists($url->path))
      {
        $count =$count+1;
        DB::table('subjects')
        ->select(['subjects.archivos'])
        ->where('nombre',$url->materia)
        ->update(['archivos' => $count]);
          return response()->download($url1);
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

    public function showparciales()
    {
      //$files = File::paginate(5);
      $user = \Auth::user();
      $files =  \DB::table('files')
      ->select('*')
      ->where('tipo','parcial')->get();

      return 	view('file/parciales', ['files' => $files]);
    }

    public function showlibros()
    {
      //$files = File::paginate(5);
      $user = \Auth::user();
      $files =  \DB::table('files')
      ->select('*')
      ->where('tipo',"libros")->get();

      return 	view('file/libros', ['files' => $files]);
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
      $url= \DB::table('files')
      ->select('*')
      ->where('nombre_original',$archivo)->first();//Consulta para obtener el path del archivo

      $consulta =\DB::table('files')
      ->where('path',$url->path)->count();//Consulta para contar los usuarios que tengan el archivo.

      $url1=$public_path."/app/".$url->path;
     $consulta2 = \DB::table('subjects')
     ->select(['subjects.archivos'])
     ->where('nombre',$url->materia)->first();//Consulta para obtener el numero de archivos
     $subject = new Subject;
     $count = $consulta2->archivos;
      //verificamos si el archivo existe y lo retornamos
      if ((Storage::exists($url->path)) and ($consulta <=1))
      {
        $count =$count-1;

        DB::table('subjects')
        ->select(['subjects.archivos'])
        ->where('nombre',$url->materia)
        ->update(['archivos' => $count]);

        \DB::table('files')
        ->where('nombre_original',$archivo)->delete();
          Storage::delete($url->path);
          return redirect('profile');
      }else if ($consulta >=1) {
        $count =$count-1;
        DB::table('subjects')
        ->select(['subjects.archivos'])
        ->where('nombre',$url->materia)
        ->update(['archivos' => $count]);
         \DB::table('files')
        ->where('nombre_original',$archivo)->delete();
        return redirect('profile');
      }else{
        return 'abort (404)';
      }

      //si no se encuentra lanzamos un error 404.
    //return 'No se deberia llegar aquí';
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
       $tConvertido = implode(" ", $tiempo);
       $nombre = $tConvertido.$file->getClientOriginalName();
       $tipo = $_POST['tipo'];
       $materia = $_POST['materia'];
       $path="$tipo/$materia/";
       $url =  $path;

       $hash = hash_file('md5', $file);
       $consulta = \DB::table('files')
       ->select(['files.nombre_original','files.path'])
       ->where('hash',$hash)->first();//consulta para de hash
       $consulta2 = \DB::table('subjects')
       ->select(['subjects.archivos'])
       ->where('nombre',$materia)->first();//Consulta para obtener el numero de archivos
        $files = new File;
        $subject = new Subject;
        $count = $consulta2->archivos;
        $user = \Auth::user();

       //indicamos que queremos guardar un nuevo archivo en el disco local
       if (!file_exists($url))
       {
         mkdir($path,0700,true);
       }
       if(!empty($consulta)){
         $count =$count+1;
         DB::table('subjects')
         ->select(['subjects.archivos'])
         ->where('nombre',$materia)
         ->update(['archivos' => $count]);
         $files -> nombre = $request->nombre;
         $files -> descripcion = $request->descripcion;
         $files -> tipo = $request->tipo;
         $files -> materia = $request->materia;
         $files -> nombre_original = $nombre;
         $files -> hash = $hash;
         $files -> path = $consulta->path;
         $files -> email = $user->email;
         $files -> name = $user->name;
         $files ->save();

       }else{

         \Storage::disk('local')->put($url.$nombre,  \File::get($file));
         $count =$count+1;
         DB::table('subjects')
         ->select(['subjects.archivos'])
         ->where('nombre',$materia)
         ->update(['archivos' => $count]);
         $files -> nombre = $request->nombre;
         $files -> descripcion = $request->descripcion;
         $files -> tipo = $request->tipo;
         $files -> materia = $request->materia;
         $files -> nombre_original = $nombre;
         $files -> hash = $hash;
         $files -> path = $url.$nombre;
         $files -> email = $user->email;
         $files -> name = $user->name;
         $files ->save();
       }




       return redirect('profile')->with('success', 'Ninguno');

    }





}
