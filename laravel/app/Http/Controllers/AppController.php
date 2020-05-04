<?php

namespace App\Http\Controllers;

use App\Weather;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    public function addRoom() {
        return view('add-room')
            ->with('rooms', Weather::where('user_id', Auth::id())
            ->groupBy('arduino_id')
            ->select('arduino_id')
            ->get());
    }

    public function addRoomPost(Request $request) {
        $weathers = Weather::where('arduino_id', $request->get('arduino_id'))->get();
        foreach($weathers as $weather) {
            $weather->user_id = Auth::id();
            $weather->save();
        }
        return redirect()->route('addRoom');
    }

    public function getWeather($id) {
        return view('show-data')
            ->with('datas', Weather::where('arduino_id', $id)->get());
    }
}