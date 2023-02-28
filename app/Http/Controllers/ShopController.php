<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;


class ShopController extends Controller
{
    public function index(){

        $data_shop = Shop::all();
        return view('shop.index', compact('data_shop'));
        // $data_shop = Shop::with('shops')->get();
        // return view('shop.index');
    }
}
