<?php
namespace App;


use Illuminate\Database\Eloquent\Model;


class File extends Model
{
  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'files';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['nombre', 'descripcion', 'tipo', 'materia'];

}
