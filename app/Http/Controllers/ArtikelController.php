<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
$current_date_time = Carbon::now()->toDateTimeString();
class ArtikelController extends Controller
{
    public function index(){
    	$artikel = DB::table('artikel')->paginate(2);

    	return view ('admin/artikel', ['artikel' => $artikel]);
    }

    public function add(){
    	return view('admin/addartikel');
    }
    public function insert(Request $request){
    	DB::table('artikel')->insert([
    		
    		'author' => $request->author,
    		'category' => $request->category,
            'title' => $request->title,
    		'content' => $request->content,
    		'created_at' => date('Y-m-d H:i:s'),
    		'updated_at' => date('Y-m-d H:i:s')
    	]);
    	return redirect('/artikel');
    }

    public function edit($id){
        //ambil data dari table by id
        $artikel = DB::table('artikel')->where('id',$id)->get();
        return view ('admin/editartikel', ['artikel' => $artikel]);
    }

    public function update(Request $request){
        DB::table('artikel')->where('id', $request->id)->update([
            'author' => $request->author,
            'category' => $request->category,
            'title' => $request->title,
            'content' => $request->content,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')]);
        return redirect ('/artikel');
    }

    public function delete($id){
        DB::table('artikel')->where('id',$id)->delete();
        return redirect('/artikel');
    }
}
