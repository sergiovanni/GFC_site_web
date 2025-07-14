<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'objet'   => 'required|string|max:78',
            'message' => 'required|string|min:10',
        ]);

        try {
            // Envoi à l'entreprise
            Mail::to('sergiovanni100@gmail.com')->send(new ContactFormMail($validated));

            return back()->with('success', 'Votre message a été envoyé avec succès.');
        } catch (\Exception $e) {
            Log::error('Erreur email : ' . $e->getMessage());
            dd($e->getMessage());
            return back()->with('error', 'Erreur lors de l\'envoi de l\'email.');
        }
    }
}