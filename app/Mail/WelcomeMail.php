<?php 
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WelcomeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre;

    /**
     * Create a new message instance.
     *
     * @param string $nombre
     * @return void
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.welcomeEmail')
                    ->subject('Bienvenido a CrisDeLaOsa')
                    ->with(['nombre' => $this->nombre]);
    }
}
