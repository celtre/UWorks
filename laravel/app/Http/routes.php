<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]


);

Route::get('login', [
      'uses' => 'Auth\AuthController@getLogin',
      'as' => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
  'uses' => 'Auth\AuthController@getLogout',
  'as' => 'logout'
]);
Route::get('principal', [ 'middleware' => 'auth',
        'uses' => 'HomeController@principal',
        'as' => 'principal'
    ]


);
// Registration routes...
Route::get('register', [
    'uses'=> 'Auth\AuthController@getRegister',
  'as' => 'register'
  ]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password', 'Auth\PasswordController@getEmail');
Route::post('password', 'Auth\PasswordController@postEmail');
Route::get('changepassword', ['middleware' => 'auth',
      'uses' => 'changePassword@index',
      'as' => 'changepassword'
  ]);
Route::post('changepassword', 'changePassword@postResetPassword');

// Password reset routes...
Route::get('reset/{token}', 'Auth\PasswordController@getReset');
Route::post('reset', 'Auth\PasswordController@postReset');

Route::get('formulario', [
  'uses' => 'StorageController@index',
  'as'  =>  'file'
  ]);
Route::post('formulario','StorageController@save');
Route::get('formulario/{archivo}', function ($archivo) {
    $public_path = storage_path();
    $url = $public_path.'/app/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (Storage::exists($archivo))
    {
        return response()->download($url);
    }
    //si no se encuentra lanzamos un error 404.
    abort(404);

});


Route::post('eliminar', 'StorageController@destroy');
Route::get('eliminar/{archivo}', function ($archivo) {
    $tipo = "documentos";
    $materia = "webIII";
    $public_path = storage_path();
    //$url = "$tipo/$materia/";
     $url = $public_path.'/app/'.$tipo.'/'.$materia.'/'.$archivo;
    //verificamos si el archivo existe y lo retornamos
    if (file_exists($url))
    {
        Storage::delete($tipo.'/'.$materia.'/'.$archivo);
        return 'Se borro con exito';
    }else{
      return abort (404);
    }

    //si no se encuentra lanzamos un error 404.
  return 'No se deberia llegar aquí';

});

/*
    Manejo de perfil
*/
Route::get('profile', function(){
  return view('profile');
});



Route::get('myfiles', [
        'uses' => 'StorageController@show',
        'as' => 'myfiles'
    ]


);
