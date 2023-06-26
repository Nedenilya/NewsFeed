<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public function InsertNews($data){
	    return DB::table('news')->insert($data);
    }

    public function GetNewsByField($field, $val){
    	return DB::table('news')->where($field, (int)$val)->first();
    }

    public function Like($id, $likes){
    	DB::table('news')->where('id', $id)->update([
			'likes' => $likes+1,
	   	]);
	   	return DB::table('news')->where('id', $id)->value('likes');
    }
}
