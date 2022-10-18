<?php

namespace Database\Seeders;

use App\Models\usuario;
use App\Models\tipoUsuario;
use App\Models\clientes;
use App\Models\pedidos;
use App\Models\productos1s;
use App\Models\detalles_venta;
use App\Models\categorias;
use App\Models\cliente;
use App\Models\detalle_venta;
use App\Models\pedido;
use App\Models\tipo_usuario;
use App\Models\usuarios;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        usuarios::factory(30)->create();
        tipo_usuario::factory(50)->create();
        cliente::factory(50)->create();
        pedido::factory(50)->create();
        detalle_venta::factory(50)->create();
        categorias::factory(50)->create();
        
    }
    
}
