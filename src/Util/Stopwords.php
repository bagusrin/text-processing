<?php

namespace Bagusrin\TextProcessing\Util;

class Stopwords{

	public function removeWords(String $text){

		try {

			$file = __DIR__."/../File/stopwordsID.txt";

		    	if (!is_readable($file)) {
            			throw new \Exception('Corpus is missing. It seems that your file is corrupted.');
        		}

        		$stopwords = explode("\n", file_get_contents($file));

			$strarray = [];
			$strarray = explode(" ", strtolower($text));
			$newArrayWithoutStopwords = array_diff($strarray, $stopwords);

			$res = implode(" ",$newArrayWithoutStopwords);

			return $res;

		} catch (\Exception $e) {  
            
            		return false;
        
        	} 
	}
	
}
