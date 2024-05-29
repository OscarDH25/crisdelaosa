<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonios')->insert([
            [
                'autor' => 'Andrea Garcia',
                'descripcion' => '',
                'testimonio' => 'Estoy encantada con Cristina! Desde el momento que hablé por primera vez con ella me transmitió algo que supe que íbamos a conectar muy bien, y así fue. Es toda una profesional y, además, tiene una energía muy bonita. Se nota que pone pasión en lo que hace.',
            ],
            [
                'autor' => 'Isabel Pamo',
                'descripcion' => 'Cantante, actriz y escritora',
                'testimonio' => 'Llevo más de nueve años dando clases de canto de manera profesional y ha sido a través de Cristina y su técnica cuando he empezado a comprender realmente el por qué de mis limitaciones, encontrando resultados eficaces desde el minuto uno. Cristina como profesional es un diez. Facilita la clase con una calidad humana y un cuidado necesario para los trabajos relacionados con la voz, tan ligados a nuestro cuerpo físico, emocional y psicológico. Recomiendo sus clases 100%',
            ],
            [
                'autor' => 'Livia Doncel',
                'descripcion' => 'Actriz y Cantante',
                'testimonio' => 'Desde el primer día trabajar con Cris ha sido un aprendizaje constante. Llevo cantando toda la vida por instinto y, después de una sola clase con ella supe que quería tenerla como profesora de técnica vocal. Con Cris he aprendido a colocar la voz sin hacerme daño en ciertos rangos, a soltar las cuerdas vocales y a sentirme más segura de mi instrumento. Cada clase tiene en cuenta cómo te sientes tanto a nivel físico como vocal. Sin duda alguna, puedo decir que soy mejor cantante desde que tomé la acertada decisión de empezar a trabajar con ella.',
            ],
            [
                'autor' => 'María Ramos',
                'descripcion' => 'Estudiante de teatro musical',
                'testimonio' => '¡Absolutamente increíble! No solo tiene un profundo conocimiento técnico, sino también una pasión contagiosa por la música y por que mejores. Su paciencia y entusiasmo hace que cada clase sea una experiencia emocionante y que salgas mucho más contenta de lo que entraste. Con su orientación experta, he visto mejoras notables en mi técnica vocal y confianza en mí misma. La recomiendo a cualquier persona que busque desarrollar su voz y explorar todo su potencial musical.🩷🎶',
            ],
        ]);
    }
}
