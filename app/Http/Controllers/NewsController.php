<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    
    public function like(Request $request){
    	$news = new News();
    	return $news->Like($request->id, $request->likes);
    }

}
