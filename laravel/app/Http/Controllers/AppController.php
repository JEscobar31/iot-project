<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        return view('app');
    }

    public function salon() {
        $jsonurl = "http://90.89.173.98/";
        $json = file_get_contents($jsonurl);
        $data = json_decode($json);
        return view('salon')->with("data", json_decode($json));
    }

    public function chambre() {
        $jsonurl = "http://90.89.173.98/";
        $json = file_get_contents($jsonurl);
        $data = json_decode($json);
        return view('chambre')->with("data", json_decode($json));
    }
}
