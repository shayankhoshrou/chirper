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
} // <--- 4. Class ends here