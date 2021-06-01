<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zapatos extends Model
{
    //
    protected $table = 'zapatos';
    protected $primaryKey = 'Idzapato';
    public $timestamps = false;    
    protected $fillable = ['calzado', 'tipo', 'color', 'talla', 'marca', 'genero', 'edades'];
}
    