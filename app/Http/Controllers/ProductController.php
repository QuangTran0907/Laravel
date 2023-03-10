<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        // $title = "Quang tran huu";

        // $MyFriends =[
        //     "name" => "Quang",
        //     "age" => 14,
        //     "sex" => "nam"
        // ];


        print_r(route('products'));
        return view("products.index");
      
    }
    public function detail($id){

        $phone = [
            "1" => "to tran",
            "2" => "huu quang"
        ];
        return view("products.index", [
            "product" => $phone[$id] ?? "khong co "
        ]);
    }
}
