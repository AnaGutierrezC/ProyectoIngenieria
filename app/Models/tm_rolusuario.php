<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tm_rolusuario extends Model
{
    protected $table="roles";//nombre de la tabla
    protected $primaryKey="id";//nombre de la llave primaria

    public $timestamps = false;
    use HasFactory;
}
