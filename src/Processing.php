<?php

namespace Bagusrin\TextProcessing;

use Bagusrin\TextProcessing\Util\Stemmer;
use Bagusrin\TextProcessing\Util\Stopwords;

class Processing{

	public function processing(){
		return "test";
	}
	
	public function stemming(){

		$stemming = new Stemmer();
		$res = $stemming->stemming();

		return $res;
	}
	
	public function stopword(String $text){

		$stopwords = new Stopwords();
		$res = $stopwords->removeWords($text);

		return $res;
	}

}
