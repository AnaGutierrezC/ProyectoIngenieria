<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table ='usuarios';
    protected $fillable =[
      'id',
      'name',
      'email_id',
      'cedula',
      'password',
      'telefono',
      'genero',
      'rol_id',
      'posting_date',
      'created_at',
      'updted_at',
    ];
    public function roles(){
        return $this->belongsTo('app\Models\Rol','rol_id','roles');
    }
}
