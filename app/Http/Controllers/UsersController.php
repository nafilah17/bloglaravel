<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index(){
    	$users = DB::table('users')->paginate(5);

    	return view ('admin/users', ['users' => $users]);
    }

    public function add(){
    	return view('admin/addusers');
    }
    public function insert(Request $request){
    	DB::table('users')->insert([
    		'name' => $request->name,
    		'email' => $request->email,
    		'role' => $request->role,
    		'profile' => $request->profile,
    		'password' => $request->password
     	]);
    	return redirect('/users');
    }

    public function edit($id){
        //ambil data dari table by id
        $users = DB::table('users')->where('id',$id)->get();
        return view ('admin/editusers', ['users' => $users]);
    }

    public function update(Request $request){
        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
    		'email' => $request->email,
    		'role' => $request->role,
    		'profile' => $request->profile,
    		'password' => $request->password]);
        return redirect ('/users');
    }

    public function delete($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/users');
    }
}
