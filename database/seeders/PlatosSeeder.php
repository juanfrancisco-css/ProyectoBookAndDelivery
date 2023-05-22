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
                'foto' => '1.png',
            ],
            [
                'nombre' => 'Hamburguesa clásica',
                'descripcion' => 'Sabrosa hamburguesa clásica con carne jugosa',
                'precio' => rand(5, 10),
                'categoria' => 'hamburguesas',
                'foto' => '2.png',
            ],
            [
                'nombre' => 'Pizza campesina',
                'descripcion' => 'Pizza rústica con ingredientes frescos de la granja',
                'precio' => rand(5, 10),
                'categoria' => 'pizzas',
                'foto' => '3.png',
            ],
            [
                'nombre' => 'Ensalada de Pasta',
                'descripcion' => 'Refrescante ensalada de pasta con vegetales',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
                'foto' => '4.png',
            ],
            [
                'nombre' => 'Patatas fritas',
                'descripcion' => 'Crujientes patatas fritas caseras',
                'precio' => rand(5, 10),
                'categoria' => 'entrantes',
                'foto' => '5.png',
            ],
            [
                'nombre' => 'Pizza 4 estaciones',
                'descripcion' => 'Pizza variada con ingredientes de las 4 estaciones',
                'precio' => rand(5, 10),
                'categoria' => 'pizzas',
                'foto' => '6.png',
            ],
            [
                'nombre' => 'Hamburguesa vegana',
                'descripcion' => 'Hamburguesa vegetariana con sabores únicos',
                'precio' => rand(5, 10),
                'categoria' => 'hamburguesas',
                'foto' => '7.png',
            ],
            [
                'nombre' => 'Hamburguesa de pollo',
                'descripcion' => 'Jugosa hamburguesa de pollo a la parrilla',
                'precio' => rand(5, 10),
                'categoria' => 'hamburguesas',
                'foto' => '8.png',
            ],
            [
                'nombre' => 'Pasta boloñesa',
                'descripcion' => 'Clásico plato de pasta con salsa boloñesa',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
                'foto' => '9.png',
            ],
        ];

        foreach ($platos as $plato) {
            Plato::create($plato);
        }
    }
}
