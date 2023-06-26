<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Parser;

class PageController extends Controller
{
	
	public function LoadMain(){	
		$slider =  Parser::parser();
		$weekMap = [
		    0 => 'Sunday',
		    1 => 'Monday',
		    2 => 'Tuesday',
		    3 => 'Wednesday',
		    4 => 'Thursday',
		    5 => 'Friday',
		    6 => 'Saturday',
		];

		$date = Carbon::now();
		$weekday = $weekMap[$date->dayOfWeek];
		$monthName = $date->format('F');

		return view('index')->with([
			'time'=> $date->toArray(),
			'day'=> $weekday,
			'month'=> $monthName,
			'slider' => $slider
		]);
	}

	public function NotFound(){
		return view('404');
	}

	public function Post($id){
		$slider =  Parser::parser();
		$weekMap = [
		    0 => 'Sunday',
		    1 => 'Monday',
		    2 => 'Tuesday',
		    3 => 'Wednesday',
		    4 => 'Thursday',
		    5 => 'Friday',
		    6 => 'Saturday',
		];

		$date = Carbon::now();
		$weekday = $weekMap[$date->dayOfWeek];
		$monthName = $date->format('F');

		return view('single_page')->with([
			'id' => $id,
			'time'=> $date->toArray(),
			'day'=> $weekday,
			'month'=> $monthName,
			'slider' => $slider
		]);
	}

	public function ContactUs(){
		return view('contact');
	}

	public function Redirect(){
		return redirect('/home');
	}
	
}
