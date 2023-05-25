<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plato;

class PlatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platos = [
            [
                'nombre' => 'Pizza 4 quesos',
                'descripcion' => 'Deliciosa pizza con 4 tipos de quesos',
                'precio' => rand(5, 10),
                'categoria' => 'pizzas',

            ],
            [
                'nombre' => 'Hamburguesa clásica',
                'descripcion' => 'Sabrosa hamburguesa clásica con carne jugosa',
                'precio' => rand(5, 10),
                'categoria' => 'hamburguesas',

            ],
            [
                'nombre' => 'Pizza campesina',
                'descripcion' => 'Pizza rústica con ingredientes frescos de la granja',
                'precio' => rand(5, 10),
                'categoria' => 'pizzas',
  
            ],
            [
                'nombre' => 'Ensalada de Pasta',
                'descripcion' => 'Refrescante ensalada de pasta con vegetales',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',

            ],
            [
                'nombre' => 'Patatas fritas',
                'descripcion' => 'Crujientes patatas fritas caseras',
                'precio' => rand(5, 10),
                'categoria' => 'entrantes',

            ],
            [
                'nombre' => 'Pizza 4 estaciones',
                'descripcion' => 'Pizza variada con ingredientes de las 4 estaciones',
                'precio' => rand(5, 10),
                'categoria' => 'pizzas',

            ],
            [
                'nombre' => 'Hamburguesa vegana',
                'descripcion' => 'Hamburguesa vegetariana con sabores únicos',
                'precio' => rand(5, 10),
                'categoria' => 'hamburguesas',

            ],
            [
                'nombre' => 'Hamburguesa de pollo',
                'descripcion' => 'Jugosa hamburguesa de pollo a la parrilla',
                'precio' => rand(5, 10),
                'categoria' => 'hamburguesas',

            ],
            [
                'nombre' => 'Pasta boloñesa',
                'descripcion' => 'Clásico plato de pasta con salsa boloñesa',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
 
            ],
        ];

        foreach ($platos as $plato) {
            Plato::create($plato);
        }
    }
}
