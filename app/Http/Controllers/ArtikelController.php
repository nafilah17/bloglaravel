<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtikelController extends Controller
{
    public function index(){
    	$tb_article = DB::table('tb_article')->paginate(5);

    	return view ('admin/artikel', ['tb_article' => $tb_article]);
    }

    public function add(){
    	return view('admin/addartikel');
    }
    public function insert(Request $request){
    	DB::table('tb_article')->insert([
    		
    		'author' => $request->author,
    		'category' => $request->category,
    		'content' => $request->content,
    		'created_at' => $request->created_at,
    		'updated_at' => $request->updated_at
    	]);

    	return redirect('/admin/artikel');
    }
}
