<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Food;
use \App\Models\Category;
use \App\Rules\UpperCase;


class FoodsController extends Controller
{
    public function index(){
        $foods = Food::all();
        return view('foods.index',[
            'foods'=>$foods
        ]);
    }
    public function create(){
        $categories = Category::all();
        
        return view('foods.create')->with('categories',$categories);
    }
    public function store(Request $request){
        $request->validate([
            'name'=> new UpperCase,
            'sl'=> 'required|integer|min:0',
            'category_id'=> 'required',
            'description'=> 'required'

        ]);
        

        $food = Food::create(['name'=>$request->input('name'),
        'sl'=>$request->input('sl'),
        'description'=>$request->input('description'),
        'category_id'=>$request->input('category_id')]);
        $food->save();
        return redirect()->action([FoodsController::class, 'index']);
    }
    public function edit($id){
        $food = Food::find($id);
        $category = Category::find($food->category_id);
        $categories = Category::all();
        $food->Category = $category;
        return view('foods.edit',compact('food','categories'));
    }

    public function update(Request$request, $id){
       
        Food::where('id',$id)->update(['name'=>$request->input('name'),
        'sl'=>$request->input('sl'),
        'description'=>$request->input('description'),'category_id'=>$request->input('category_id')]);
        return redirect()->action([FoodsController::class, 'index']);

    }
    public function destroy($id){
       Food::find($id)->delete();
       return redirect()->action([FoodsController::class, 'index']);

    }
    

}
