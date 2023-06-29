<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table ='tickets';
    public function etiquetas(){
        return $this->belongsTo(etiqueta::class,'etiqueta_id','id');
    }
}
