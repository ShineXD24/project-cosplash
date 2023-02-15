<?php

namespace App\Http\Controllers;

use App\Models\Arrival;
use App\Models\Favorit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArrivalController extends Controller
{
    public function index(){
        // return view('home.app',[
        //     "data_arrival" => Arrival::all()
        // ]);


        // $data_arrival = DB::table('arrivals')

        $data_arrival = Arrival::with('favorit')->get();
        $data_favorit = Favorit::with('arrival')->get();
        return view('home.app',compact('data_arrival','data_favorit'));
    }



}
