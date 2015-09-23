<?php
	$page = 1;
	
	if (isset($_POST['submit'])) {
		$user_input = $_POST["number"];
	} else {
		$user_input = rand(1, 5);
	}
		
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
	
	// function changes the password separator
	function separator() {
		$dash = "-";
		if (isset($_POST["separator"])) {
			$sep_array = str_split($_POST["separator"]);
			if (count($sep_array) > 1) {
					return $sep_array[rand(0, (count($sep_array) - 1))];
				} elseif (count($sep_array) == 1 && $sep_array[0] != "") {
					return $sep_array[0];
				} else {					
					return $dash;
				}
		}	else {
			return $dash;
		}
	}
	
	// funtion selects user inputed amount of words from the word array
	function choose_words($cont_array, $usr_input) {
		$final_words = $cont_array[0];
		for ($i=1; $i < $usr_input; $i++) {
			if (isset($_POST["uppercase"])) {
				$final_words = ucwords($final_words) . separator() . ucwords($cont_array[rand(0, count($cont_array))]);
			} else {
				$final_words = $final_words . separator() . $cont_array[rand(0, count($cont_array))];				
			}
		}
		if (isset($_POST["end_num"])) {
			$final_words = $final_words . rand(0, 9);
		}
		return $final_words;		
	}
	
?>