<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class tipo_usuario extends Model
{
    use HasFactory;
    use HasFactory, SoftDeletes;
    protected $table = 'usuarios';
    protected $primarykey = 'id_tipo_usuario';    
    protected $dates= ['deleteted_at'];
    protected $fillable = [

        'nombre',
        'apellido',
        'id_usuarios',
        'id_clientes',



    ];

}
