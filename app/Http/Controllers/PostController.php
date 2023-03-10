<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        // $post = DB::select('select * from posts where id = :id;',[
        //     'id'=>4
        // ]);
        $post = DB::table("posts")
        //->where('id',9)->update(['id'=>9,'body'=>'to tran','created_at'=>now()]);
        ->where('id',9)->delete();



        // ->insert([
        // 'title'=>'Quang',
        // 'body'=> 'tran huu'
        // ]);

        // ->whereBetween('id',[1,3])
        // ->orderByDesc('id')
        // ->latest()
        // ->oldest()
       
        // ->where('created_at','>',now()->subDay())
        // ->orWhere('id','>',4) 
        // ->select('*')
        // ->get();

        //->first('id');
        // ->latest()->first();
        
        dd($post);
        return view('posts.index');
    }
}
