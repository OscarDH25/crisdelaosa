<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class EventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('eventos')->insert([
            [
                'nombre' => 'Presentación Evento DisneyLand Paris 25 aniversario',
                'archivo_multimedia' => 'img/eventos/eventos1.jpg',
            ],
            [
                'nombre' => 'Concierto de la WSA Big Band en el Jazz Summer Fest',
                'archivo_multimedia' => 'img/eventos/eventos2.jpg',
            ],
            [
                'nombre' => 'Art Duet durante un concierto en Restaurante Actual',
                'archivo_multimedia' => 'img/eventos/eventos3.webp',
            ],
            [
                'nombre' => 'Art Duet antes de grabar su demo en Larraga Studios',
                'archivo_multimedia' => 'img/eventos/eventos4.webp',
            ],
            [
                'nombre' => 'Art Duet en un evento Privado para A&M',
                'archivo_multimedia' => 'img/eventos/eventos5.webp',
            ],
            [
                'nombre' => 'Concierto de la WSA Big Band en Galileo Galilei',
                'archivo_multimedia' => 'img/eventos/eventos6.jpg',
            ],
        ]);
    }
}
