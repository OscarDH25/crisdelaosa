<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mediaItems = [
            ['tipo' => 'cantante', 'nombre' => 'Concierto Teatralizado "Flores para Concha" con la OCAL de Almería en el Auditorio Maestro Padilla', 'archivo_multimedia' => 'img/media/cantante1.jpeg'],
            ['tipo' => 'cantante', 'nombre' => 'Duo con Pedro Pomares en el concierto Teatralizado "Flores para Concha"', 'archivo_multimedia' => 'img/media/cantante2.jpeg'],
            ['tipo' => 'cantante', 'nombre' => 'Swing Dance Party en Galileo Galilei', 'archivo_multimedia' => 'img/media/cantante3.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'WsaBB en Sala Intruso', 'archivo_multimedia' => 'img/media/cantante4.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Concierto "Noches de Chinchón" en Castillo de Chinchón con WSABB', 'archivo_multimedia' => 'img/media/cantante5.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Concierto 2 de enero en la plaza el Matadero de Madrid', 'archivo_multimedia' => 'img/media/cantante6.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Evento privado en Parque de atracciones de Madrid con la WSABB', 'archivo_multimedia' => 'img/media/cantante7.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Evento privado en Parque de atracciones de Madrid con la WSABB', 'archivo_multimedia' => 'img/media/cantante8.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Festival de Jazz de Toledo con WSABB', 'archivo_multimedia' => 'img/media/cantante9.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Concierto Sala CAFË BERLíN', 'archivo_multimedia' => 'img/media/cantante10.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Presentación de disco WsaBB en Sala Galileo Galilei', 'archivo_multimedia' => 'img/media/cantante11.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Presentación de disco WsaBB en Sala Galileo Galilei', 'archivo_multimedia' => 'img/media/cantante12.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Concierto en Sala Galileo Galilei', 'archivo_multimedia' => 'img/media/cantante13.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Concierto en Sala Galileo Galilei', 'archivo_multimedia' => 'img/media/cantante14.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Teatro SanPol con la wsaBB', 'archivo_multimedia' => 'img/media/cantante15.jpg'],
            ['tipo' => 'cantante', 'nombre' => 'Concierto Teatralizado "Flores para Concha" con la OCAL de Almería en el Auditorio Maestro Padilla', 'archivo_multimedia' => 'img/media/cantante16.jpeg'],
            ['tipo' => 'actriz', 'nombre' => 'Fotograma Spot Formagame', 'archivo_multimedia' => 'img/media/actriz1.jpeg'],
            ['tipo' => 'actriz', 'nombre' => 'Fotograma Spot Formagame', 'archivo_multimedia' => 'img/media/actriz2.jpeg'],
            ['tipo' => 'actriz', 'nombre' => 'Gran Musical de París', 'archivo_multimedia' => 'img/media/actriz3.jpeg'],
            ['tipo' => 'actriz', 'nombre' => 'Fotograma Teaser un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz4.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Fotograma Teaser un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz5.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Fotograma Teaser un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz6.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Fotograma Teaser un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz7.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Musical La misere Tributo a les Miserables', 'archivo_multimedia' => 'img/media/actriz8.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Rodaje Entrenamiento actoral con Carla Carpasoro', 'archivo_multimedia' => 'img/media/actriz9.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Musical La misere Tributo a les Miserables', 'archivo_multimedia' => 'img/media/actriz10.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'MUY OSCURA , NO LA PONEMOS / Fotograma Teaser un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz11.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Rodaje Un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz12.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Rodaje Un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz13.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Rodaje Un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz14.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Musical Tributo Legally Blonde', 'archivo_multimedia' => 'img/media/actriz15.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Rodaje época , teaser un nuevo renacer', 'archivo_multimedia' => 'img/media/actriz16.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Presentación Teatral para Gira Special Tours', 'archivo_multimedia' => 'img/media/actriz17.jpg'],
            ['tipo' => 'actriz', 'nombre' => 'Evento Promo MARVEL + DisneyLand PAris con Premiere Events', 'archivo_multimedia' => 'img/media/actriz18.jpg'],
            //     ['tipo' => 'profe', 'nombre' => '', 'archivo_multimedia' => 'img/media/profe1'],
            //     ['tipo' => 'profe', 'nombre' => '', 'archivo_multimedia' => 'img/media/profe2'],
            //     ['tipo' => 'profe', 'nombre' => '', 'archivo_multimedia' => 'img/media/profe3'],
            //     ['tipo' => 'profe', 'nombre' => '', 'archivo_multimedia' => 'img/media/profe4'],
        ];

        DB::table('media')->insert($mediaItems);
    }
}
