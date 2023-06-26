<?php 

namespace App\Services;

use Symfony\Component\DomCrawler\Crawler;

class ParserService
{

	public function parser(){
		return file_get_contents('parsingResource.blade.php');
	}

}