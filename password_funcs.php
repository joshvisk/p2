<?php
	$page = 1;
	
	// placeholder for when user input is POSTED
	$user_input = rand(1, 5);
	
	$url_array = url_create();		
	preg_match_all("/<li>(.*)<\/li>/U", preg_replace('/\s+/', '', file_get_contents($url_array[rand(0, 14)])), $content_array);
	$word_array = choose_words($content_array[1], $user_input);

	// function creates the page numbers within the word scrape urls
	function page_nums() {
		global $page;
		if ($page < 10) {
			$pagenum = "0" . $page;
			$page++;
			return $pagenum;
		} else {
			$pagenum = $page;
			$page++;
			return $pagenum;
		}
	}
	
	// function creates an array of full urls for word scraping.
	function url_create() {
		global $page;
		$count = 0;		
		$urldomain = "http://www.paulnoll.com";
		$urldirectory = "/Books/Clear-English/";
		while ($page < 31) {
			$urlfile = "words-" . page_nums() . "-" . page_nums() . "-hundred.html";
			$url_funcarray[$count] = $urldomain . $urldirectory . $urlfile;
			$count++;
		}
		return $url_funcarray;
	}
	
	// funtion selects user inputed amount of words from the word array
	function choose_words($cont_array, $usr_input) {
		$final_words = $cont_array[0];
		for ($i=1; $i <= $usr_input; $i++) {
			//$temp_array[$i] = $cont_array[rand(0, count($cont_array))];
			$final_words = $final_words . "-" . $cont_array[rand(0, count($cont_array))];
		}
			
		return $final_words;
		
	}
	
?>