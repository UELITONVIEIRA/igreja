<?php

namespace App\Http\Controllers;

use App\Models\PrayerRequest;
use Illuminate\Http\Request;

class PrayerRequestController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'message' => 'required|string|max:5000',
        ]);

        PrayerRequest::create($validated);

        return back()->with('success', 'Seu pedido de oração foi enviado com carinho. Estaremos orando por você!');
    }
}
