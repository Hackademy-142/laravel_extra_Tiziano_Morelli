<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chirp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home() {

        $user = User::all();

        return view('welcome', compact('user'));
    }

    public function edit(Chirp $chirp){
        return view('chirp.edit', compact('chirp'));
    }

    public function showProfile(){

        $user = Auth::user();

        $chirp = Chirp::all();

        return view('profile.showProfile', compact('user','chirp'));
    }
}
