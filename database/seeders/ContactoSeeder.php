<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contacto;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contacto = new Contacto();
        $contacto->correo = "usuario_prueba@gmail.com";
        $contacto->estado = null;
        $contacto->save();
    }
}
