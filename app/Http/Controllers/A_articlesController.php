<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\A_articles;

class A_articlesController extends Controller
{
    public function index(){
    	$a_articles = A_articles::all();

    	return view('admin/a_articles', ['a_articles' => $a_articles]);
    }
}
