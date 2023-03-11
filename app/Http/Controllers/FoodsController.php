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
    public function create(){
        
        return view('foods.create');
    }
    public function store(Request $request){
        $food = Food::create(['name'=>$request->input('name'),'sl'=>$request->input('sl'),'description'=>$request->input('description')]);
        $food->save();
        return redirect()->action([FoodsController::class, 'index']);
    }
    public function edit($id){
        $food = Food::find($id);
        return view('foods.edit',[
            'food'=>$food
        ]);
    }

    public function update(Request$request, $id){
       
        Food::where('id',$id)->update(['name'=>$request->input('name'),
        'sl'=>$request->input('sl'),
        'description'=>$request->input('description')]);
        return redirect()->action([FoodsController::class, 'index']);

    }
    public function destroy($id){
       Food::find($id)->delete();
       return redirect()->action([FoodsController::class, 'index']);

    }
    

}
