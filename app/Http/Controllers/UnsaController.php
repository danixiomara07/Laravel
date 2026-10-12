<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnsaController extends Controller
{
    public function index()
    {
        $noticias = [
            [
                'titulo' => 'UNSA lidera ranking de patentes en el sur del país',
                'categoria' => 'Investigación',
                'fecha' => '12 May 2024',
                'descripcion' => 'Nuestros investigadores logran un hito histórico con el registro de nuevas patentes.',
                'imagen' => 'https://images.unsplash.com/photo-1532094349884-543bc11b234d?w=800'
            ],
            [
                'titulo' => 'Nuevos convenios con universidades de Europa',
                'categoria' => 'Institucional',
                'fecha' => '10 May 2024',
                'descripcion' => 'Estudiantes podrán realizar intercambios académicos.',
                'imagen' => 'https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800'
            ],
            [
                'titulo' => 'Festival Cultural UNSA: Arte en el Claustro',
                'categoria' => 'Cultura',
                'fecha' => '08 May 2024',
                'descripcion' => 'La comunidad universitaria participa en actividades culturales.',
                'imagen' => 'https://images.unsplash.com/photo-1541339907198-e08756dedf3f?w=800'
            ]
        ];

        $eventos = [
            ['dia' => '15', 'titulo' => 'Conferencia: Futuro de la IA', 'lugar' => 'Aula Magna · 10:00 AM'],
            ['dia' => '18', 'titulo' => 'Feria del Libro Agustino', 'lugar' => 'Explanada · Todo el día'],
            ['dia' => '22', 'titulo' => 'Taller de Innovación Social', 'lugar' => 'Virtual · 4:00 PM'],
            ['dia' => '25', 'titulo' => 'Charla: Movilidad Estudiantil', 'lugar' => 'Paraninfo · 11:00 AM']
        ];

        return view('unsa.index', compact('noticias', 'eventos'));
    }
}