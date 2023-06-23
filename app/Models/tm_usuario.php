<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tm_usuario extends Model
{
    public $timestamps = false;
    protected $table="usuarios";//nombre de la tabla
    protected $primaryKey="id";//nombre de la llave primaria


    use HasFactory;
}
