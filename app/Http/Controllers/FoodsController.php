<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Food;

class FoodsController extends Controller
{
    public function index(){
        $foods = Food::all();
        return view('foods.index',[
            'foods'=>$foods
        ]);
    }
}
