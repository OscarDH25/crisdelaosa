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

    // Guardar en la base de datos
    Contacto::create([
        'nombre' => $validated['nombre'],
        'email' => $validated['email'],
        'telefono' => $validated['telefono'],
        'mensaje' => $validated['mensaje'],
    ]);

    // Verificar los datos recibidos
    //dd($validated);

    // Enviar el correo electrónico
    Mail::to('8340db0c0f-7ef049+1@inbox.mailtrap.io')->send(new ContactoMail($validated));

    return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
}

}
