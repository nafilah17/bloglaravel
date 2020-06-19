<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function index(){
    	$profil = DB::table('profil')->paginate(5);

    	return view ('admin/profile', ['profil' => $profil]);
    }

    public function add(){
    	return view('admin/addprofile');
    }
    public function insert(Request $request){
    	DB::table('profil')->insert([
    		
    		'name' => $request->name,
    		'gender' => $request->gender,
            'birthday' => $request->birthday,
    		'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
    	]);
    	return redirect('/profile');
    }

    public function edit($id){
        //ambil data dari table by id
        $profil = DB::table('profil')->where('id',$id)->get();
        return view ('admin/editprofile', ['profil' => $profil]);
    }

    public function update(Request $request){
        DB::table('profil')->where('id', $request->id)->update([
            'name' => $request->name,
    		'gender' => $request->gender,
            'birthday' => $request->birthday,
    		'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')]);
        return redirect ('/profile');
    }

    public function delete($id){
        DB::table('profil')->where('id',$id)->delete();
        return redirect('/profile');
    }
}
