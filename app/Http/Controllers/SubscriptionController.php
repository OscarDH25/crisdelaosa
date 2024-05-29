<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request, $planId)
    {
        // Mapear los plan_id a las URLs de pago de Stripe generadas
        $paymentLinks = [
            'price_1PKMvcLBlcncf3EWiklxhh5j' => 'https://buy.stripe.com/test_bIYaFh3HH2hNdWgdQQ', // Enlace de pago para Clase Individual
            'price_1PKMxfLBlcncf3EWExTEOlbV' => 'https://buy.stripe.com/test_00g14Ha655tZdWgbIJ', // Enlace de pago para Paquete de 5 Clases
            'price_1PKMzILBlcncf3EWqsuYJZXt' => 'https://buy.stripe.com/test_cN26p14LL1dJ8BWcMO', // Enlace de pago para Plan Mensual
        ];

        if (!array_key_exists($planId, $paymentLinks)) {
            Log::error('ID del plan inválido: ' . $planId);
            return redirect()->back()->with('error', 'Plan no encontrado.');
        }

        try {
            // Redirigir a la URL de pago de Stripe correspondiente
            return redirect()->away($paymentLinks[$planId]);
        } catch (\Exception $e) {
            Log::error('Error al redirigir al enlace de pago de Stripe: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Error al procesar el pago.');
        }
    }
}
