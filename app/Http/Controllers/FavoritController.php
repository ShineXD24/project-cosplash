<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use App\Models\Favorit;
use Illuminate\Http\Request;

class FavoritController extends Controller
{
    public function index(){
        $data_arrival = Arrival::with('favorit')->get();
        $data_favorit = Favorit::with('arrival')->get();
        return view('home.app',compact('data_favorit','data_arrival'));
    }
}
