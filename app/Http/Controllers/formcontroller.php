<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class formcontroller extends Controller
{
    public function index() {
	$student=DB::table('data')->get();
	return view('welcome',['data'=>$student]);
}
	public function create(Request $request) {
		DB::table('data')->insert([
			'name'=>$request->name,
			'email'=>$request->email,
			'password'=>$request->password,

		]);
		return redirect(route('fetch'));
	}
	public function edit($id) {
		$student=DB::table('data')->where('id',$id)->first();
		return view('edit',['data'=>$student]);
	}
	public function update(Request $request,$id) 
	{
		DB::table('data')->where('id',$id)->update([
		'name'=>$request->name,
		'email'=>$request->email,
		'password'=>$request->password,
	]);
		$student=DB::table('data')->get();
		return view('welcome',['data'=>$student]);
	}
	public function del($id) {
		DB::table('data')->where('id',$id)->delete();
		return redirect(route('fetch'));	
	}
}
