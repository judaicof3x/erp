<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function planIndex() {
        return view('pages.produtos.planos.index');
    }

    public function planCreate() {
        return view('pages.produtos.planos.create');
    }

    public function planShow() {
        return view('pages.produtos.planos.show');
    }

    public function planShow2() {
        return view('pages.produtos.planos.show2');
    }

    public function planShow3() {
        return view('pages.produtos.planos.show3');
    }
}
