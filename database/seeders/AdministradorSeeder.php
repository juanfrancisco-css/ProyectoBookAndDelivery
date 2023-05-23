<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;//importar 

class AdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        /*
T INTO `users`(`id`, `name`, `surname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')



 INSERT INTO `users`( `name`, `surname`, `email`, `password`, `created_at`, `updated_at`) VALUES ('admin','admin','admin@gmail.com','vistaalegre','2023-05-09 08:30:23','2023-05-09 08:30:23');
        */

        $user = new User();
        $user->name="Administrador";
        $user->surname="Administrador";
        $user->email="Administrador@gmail.com";
        $user->password="vistaalegre";
        $user->created_at='2023-05-09 08:30:23';
        $user->updated_at='2023-05-09 08:30:23';
        $user->save();

    }
}
