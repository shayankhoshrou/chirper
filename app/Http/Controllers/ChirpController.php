<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{ // <--- 1. Added this opening brace for the class
  
    public function index()
    { // <--- 2. Function starts here
        $chirps = [
            [
                'author' => 'Jane Doe',
                'message' => 'Just deployed my first Laravel app! 🚀',
                'time' => '5 minutes ago'
            ],
            [
                'author' => 'John Smith',
                'message' => 'Laravel makes web development fun again!',
                'time' => '1 hour ago'
            ],
            [
                'author' => 'Alice Johnson',
                'message' => 'Working on something cool with Chirper...',
                'time' => '3 hours ago'
            ]
        ]; // <--- 3. Removed the extra { } that were around this array

        return view('home', ['chirps' => $chirps]);
    } 
} // <--- 4. Class ends here