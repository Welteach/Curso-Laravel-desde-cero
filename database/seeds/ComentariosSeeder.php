<?php

use App\Comentarios;
use Illuminate\Database\Seeder;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentarios::create([
            'id_usuario' => 1,
            'comentario' => 'Este es mi primer comentario en mi proyecto Laravel.',
        ]);

        Comentarios::create([
            'id_usuario' => 1,
            'comentario' => 'Este es mi primer Seeder creado en mi proyecto Laravel.',
        ]);
    }
}
