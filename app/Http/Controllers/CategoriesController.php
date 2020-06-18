<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index(){
    	$categories = DB::table('categories')->paginate(5);

    	return view ('admin/categories', ['categories' => $categories]);
    }

    public function add(){
    	return view('admin/addcategories');
    }
    public function insert(Request $request){
    	DB::table('categories')->insert([
    		'name' => $request->name,
    		
    	]);
    	return redirect('/categories');
    }

    public function edit($id){
        //ambil data dari table by id
        $categories = DB::table('categories')->where('id',$id)->get();
        return view ('admin/editcategories', ['categories' => $categories]);
    }

    public function update(Request $request){
        DB::table('categories')->where('id', $request->id)->update([
            'name' => $request->name]);
        return redirect ('/categories');
    }

     public function delete($id){
        DB::table('categories')->where('id',$id)->delete();
        return redirect('/categories');
    }
}
