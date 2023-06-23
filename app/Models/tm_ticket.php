<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tm_ticket extends Model
{   protected $table="tickets";//nombre de la tabla
    protected $primaryKey="id";//nombre de la llave primaria
    public $timestamps = false;
    use HasFactory;

}
