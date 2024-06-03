<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use App\Mail\ContactoMail;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    // Muestra el formulario de contacto
    public function show()
    {
        return view('contacto');
    }

    // Procesa el formulario de contacto
    public function process(Request $request)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
            'mensaje' => 'required|string',
        ]);

        // Sanitizar las entradas del formulario
        $nombre = htmlentities($validated['nombre'], ENT_QUOTES, 'UTF-8');
        $email = htmlentities($validated['email'], ENT_QUOTES, 'UTF-8');
        $telefono = htmlentities($validated['telefono'], ENT_QUOTES, 'UTF-8');
        $mensaje = htmlentities($validated['mensaje'], ENT_QUOTES, 'UTF-8');

        // Guardar en la base de datos
        Contacto::create([
            'nombre' => $nombre,
            'email' => $email,
            'telefono' => $telefono,
            'mensaje' => $mensaje,
        ]);

        // Enviar el correo electrónico
        Mail::to('9b51dd47eb-dfe53a+1@inbox.mailtrap.io')->send(
            new ContactoMail([
                'nombre' => $nombre,
                'email' => $email,
                'telefono' => $telefono,
                'mensaje' => $mensaje,
            ]),
        );

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
