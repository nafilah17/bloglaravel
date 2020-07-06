<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class A_categoriesController extends Controller
{
    public function index(){
    	$a_categories = DB::table('a_categories')->paginate(2);

    	return view ('admin/a_categories', ['a_categories' => $a_categories]);
    }
}
