<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('review.index');
    }
}
