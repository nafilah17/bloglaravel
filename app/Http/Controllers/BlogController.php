<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index(){
    	$artikel = DB::table('artikel')->limit(5)->get();

    	return view ('/blog', ['artikel' => $artikel]);
    }
    
    public function detail($id){
    	$artikel = DB::table('artikel')->where('id',$id)->limit(1)->get();

    	return view ('blogdetail', ['artikel' => $artikel]);
    }
}
