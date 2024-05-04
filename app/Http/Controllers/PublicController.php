<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function edit(Chirp $chirp){
        return view('chirp.edit', compact('chirp'));
    }
}
