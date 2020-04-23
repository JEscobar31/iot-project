<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('app');
    }

    public function salon() {
        return view('salon');
    }

    public function chambre() {
        return view('chambre');
    }
}
