<?php
	// Author: Chris Clerville
	
	$API_KEY = '396c4e721be83b3bc412b2004cbee132';
	
	$keyword = $_POST['keyword'];
	$source = $_POST['source'];
		
	if($source == "youtube") {
		$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&format=5&max-results=10&start-index=1';
		$JSON = file_get_contents($url, true);	
		echo $JSON;
	 } 
	 else if($source == "vimeo") {
		$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&format=5&max-results=10&start-index=1';
		$JSON = file_get_contents($url, true);	
		echo $JSON;
	 }
	 else if($source == "dailymotion") {
		$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&format=5&max-results=10&start-index=1';
		$JSON = file_get_contents($url, true);	
		echo $JSON;
	 }
?>
