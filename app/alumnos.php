<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumnos extends Model
{
    protected $table = 'alumnos';
    protected $fillable = ['nombre','apellido_paterno' ,'apellido_materno' ,'carrera' ];
  protected $guarded = ['id'];
}
