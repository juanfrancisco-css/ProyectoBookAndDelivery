<?php

namespace Database\Seeders;

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
                'nombre' => 'Pasta carbonara',
                'descripcion' => 'Clásico plato de pasta con salsa carbonara, panceta y queso',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
            ],
            [
                'nombre' => 'Pasta boloñesa',
                'descripcion' => 'Clásico plato de pasta con salsa boloñesa',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
            ],
            [
                'nombre' => 'Ensalada Caprese',
                'descripcion' => 'Ensalada fresca con tomate, mozzarella y albahaca',
                'precio' => rand(5, 10),
                'categoria' => 'ensaladas',
            ],
            [
                'nombre' => 'Pizza Margarita',
                'descripcion' => 'Pizza tradicional con salsa de tomate, mozzarella y albahaca',
                'precio' => rand(5, 10),
                'categoria' => 'pizzas',
            ],
            [
                'nombre' => 'Lasaña',
                'descripcion' => 'Deliciosa lasaña de carne o vegetales con capas de pasta y salsa',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
            ],
            [
                'nombre' => 'Tiramisú',
                'descripcion' => 'Postre italiano de capas de bizcocho empapado en café y crema de mascarpone',
                'precio' => rand(5, 10),
                'categoria' => 'postres',
            ],
            [
                'nombre' => 'Risoto',
                'descripcion' => 'Plato de arroz cremoso con ingredientes como champiñones, mariscos o vegetales',
                'precio' => rand(5, 10),
                'categoria' => 'arroz',
            ],
            [
                'nombre' => 'Ravioli',
                'descripcion' => 'Pasta rellena con diversos ingredientes, servida con salsa',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
            ],
            [
                'nombre' => 'Calzone',
                'descripcion' => 'Pizza cerrada en forma de empanada rellena de ingredientes variados',
                'precio' => rand(5, 10),
                'categoria' => 'pizzas',
            ],
            [
                'nombre' => 'Pasta al pesto',
                'descripcion' => 'Pasta con salsa de pesto, hecha con albahaca, piñones, queso y aceite de oliva',
                'precio' => rand(5, 10),
                'categoria' => 'pastas',
            ],
        ];

        foreach ($platos as $plato) {
            Plato::create($plato);
        }
    }
}
