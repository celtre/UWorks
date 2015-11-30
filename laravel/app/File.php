<?php
namespace App;


use Illuminate\Database\Eloquent\Model;


class File extends Model
{

  protected $table = 'files';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'descripcion', 'tipo', 'materia','nombre_original','hash','path','email'];



}
