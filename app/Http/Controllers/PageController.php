<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;
use Parser;

class PageController extends Controller
{
	
	public function LoadMain(){
		return view('index')->with($this->GetDefaultData());
	}

	public function Post($id){
		return view('single_page')->with($this->GetDefaultData($id));
	}

	public function ContactUs(){
		return view('contact');
	}

	public function Redirect(){
		return redirect('/home');
	}

	public function NotFound(){
		return view('404');
	}

	public function GetWeekDay($date){
		$weekMap = [
		    0 => 'Sunday',
		    1 => 'Monday',
		    2 => 'Tuesday',
		    3 => 'Wednesday',
		    4 => 'Thursday',
		    5 => 'Friday',
		    6 => 'Saturday',
		];

		return $weekMap[$date->dayOfWeek];
	}

	public function GetDefaultData($id = null){
		$newsAll = $this->GetNews();
		$date = Carbon::now();
		$weekday = $this->GetWeekDay($date);
		$monthName = $date->format('F');

		$data = [
			'time'=> $date->toArray(),
			'day'=> $weekday,
			'month'=> $monthName,
			'slider' => $newsAll,
		];

		if($id)
			$data['news'] = $this->GetNews($id);

		return $data;
	}

	public function GetNews($id = null){
		$news = new News();
		if($id)
			return $news->GetNewsByField('id', $id);
		return $news->all();
	}
	
}
