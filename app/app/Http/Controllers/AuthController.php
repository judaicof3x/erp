<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function recuperar() {
        return view('auth.forgot-password');
    }

    public function resetar() {
        return view('auth.reset-password');
    }
}
