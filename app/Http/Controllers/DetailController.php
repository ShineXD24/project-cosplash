<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function indexdetail(){
        return view('detail.index',[
            "data_cosplash" => Detail::all()
        ]);
    }
}
