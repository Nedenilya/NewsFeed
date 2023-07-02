<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    
	public function Contact(Request $request){
		
		DB::table('contacts')->insert([
			'name' => '\''.$request->name.'\'',
	      	'email' => '\''.$request->email.'\'', 
	      	'message' => '\''.$request->message.'\''
	   	]);
		return view('contact');
	}

}
