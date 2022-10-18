<?php

namespace App\Models;

use App\Models\tipo_usuario as ModelsTipo_usuario;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\tipo_usuario;
use Illuminate\Database\Eloquent\SoftDeletes;


class usuarios extends Model
{
    use HasFactory;

    use HasFactory, SoftDeletes;
    protected $table = 'usuarios';
    protected $primarykey = 'id_usuarios';
    protected $dates= ['deleteted_at'];
    protected $fillable = [
      
        'email',
        'password',
    ]; 
}
