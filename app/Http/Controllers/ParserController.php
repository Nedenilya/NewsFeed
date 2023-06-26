<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
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

	    $news = new News();
	    return $news->InsertNews($main);
	}

}
