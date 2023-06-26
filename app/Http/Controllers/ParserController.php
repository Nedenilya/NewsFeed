<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Parser;

class ParserController extends Controller
{
	public function parse(){

	    $slider =  Parser::parser();
	    $arr = explode('splitline', $slider);
	    $data = array();
	    $main  = array();
	    $i = 0;

	    foreach ($arr as $post) {
	    	
	    	foreach (explode(';', $post) as $row)
	    		if(ord(trim($row)) != 0)
		    		$data[trim(explode('=', $row)[0])] = trim(explode('=', $row)[1]).'';

	    	$main[] = $data;
	    }
	    $statement = DB::table('news')->insert($main);
	    return $statement;
	}

}
