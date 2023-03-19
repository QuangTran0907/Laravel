<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Size;
use App\Models\Size_Product;
use App\Models\Product;
use App\Models\Media;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',[
            'products'=>$products
        ]);
    }
    public function create(){
        $brands = Brand::all();
        $sizes = Size::all();

        
        return view('products.create',compact('brands','sizes'));
    }
    public function store(Request $request){
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'image_path' => 'required|mimes:jpg,png,jpeg|max:5048'
        // ]);

        
        $generatedImageName = 'image'.time().'-'
        .$request->name.'.'
        .$request->image->extension();
        //move to a folder
        $request->image->move(public_path('images'), $generatedImageName);

        $product = Product::create([
            'name' => $request->input('name'),
            'color' => $request->input('color'),
            'description' => $request->input('description'),
            'brand_id' => $request->input('brand_id'),
            'price' => $request->input('price'),
            'release_year' => $request->input('release_year'),
            'image_path' => $generatedImageName

           
        ]);
        $product->save();
        $sizes = Size::all();
        foreach($sizes as $item)
        {
            if($request[$item->id]=="on"||$request[$item->id."SL"]!=null)
            {
                $size_product = Size_Product::create([
                    'product_id' => $product->id,
                    'size_id' => $item->id,
                    'amount' => $request[$item->id."SL"],
                ]);
                $size_product->save();
            }
           
        }
        
        return redirect()->action([ProductController::class, 'index']);
    }

    public function edit($id){
        $product = Product::find($id);
        $brands = Brand::all();
        $sizes = Size::all();

        return view('products.edit',compact('product','brands','sizes'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
       
        if($request->file('image')==null){
            $generatedImageName = $product->image_path;
        }
        else{
            $generatedImageName = 'image'.time().'-'
            .$request->name.'.'
            .$request->image->extension();
            //move to a folder
            $request->image->move(public_path('images'), $generatedImageName);
        }
        Product::where('id',$id)->update(['name'=>$request->input('name'),
        'price'=>$request->input('price'),
        'description'=>$request->input('description'),'brand_id'=>$request->input('brand_id'),'color' => $request->input('color'), 'release_year' => $request->input('release_year'),'image_path' => $generatedImageName]);
        return redirect()->action([ProductController::class, 'index']);

    }
    public function destroy($id){
       Product::find($id)->delete();
       return redirect()->action([ProductController::class, 'index']);

    }
    public function add_image($id)
    {
        $product = Product::find($id);
        return view('products.add_image',compact('product'));
    }

    public function save_media(Request $request,$id)
    {
        $product = Product::find($id);
        for ($i=1; $i <= 4; $i++) { 
            if($request->file('image'.$i)!=null){
                $generatedImageName = 'image'.time()+$i.'-'
                .$request->name.'.'
                .$request->file('image'.$i)->extension();
                $arr[$i] = $generatedImageName;
                Media::create(['image_path'=>$generatedImageName,
                                'product_id'=>$product->id])->save();
                $request->file('image'.$i)->move(public_path('images'), $generatedImageName);
            }

            
        }  
          
        return redirect()->action([ProductController::class, 'index']);

    }

    public function web_index()
    {
        $products = Product::all();
        return view('web.index',compact('products'));
    }

 
    
}
