<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        // Validação
        $data = $request->validate([
            'email' => ['required', 'email', 'max:255', 'unique:leads,email'],
        ]);

        // Salvar no banco
        Lead::create($data);

        // Se for requisição normal (form HTML)
        if (! $request->expectsJson()) {
            return back()->with('success', 'Email cadastrado com sucesso! 🎉');
        }

        // Se você quiser consumir via AJAX no futuro
        return response()->json([
            'message' => 'Email cadastrado com sucesso!',
        ]);
    }
}
