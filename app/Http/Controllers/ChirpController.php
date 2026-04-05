<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class ChirpController extends Controller
{ // <--- 1. Added this opening brace for the class
  
    public function index()
    { // <--- 2. Function starts here
        $chirps = Chirp::with('user')
            ->latest()
            ->take(50)  // Limit to 50 most recent chirps
            ->get();

        return view('home', ['chirps' => $chirps]);
    } 
 // <--- 4. Class ends here

public function store(Request $request)
{
    $validated = $request->validate([
        'message' => 'required|string|max:255',
    ], [
        'message.required' => 'Please write something to chirp!',
        'message.max' => 'Chirps must be 255 characters or less.',
    ]);

    \App\Models\Chirp::create([
        'message' => $validated['message'],
        'user_id' => null,
    ]);

    return redirect('/')->with('success', 'Your chirp has been posted!');
}
}