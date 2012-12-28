<?php
	// Author: Chris Clerville
	
	$API_KEY = '94bac6fb1372fc8bf3f88aaea1d56925';
	
	$keyword = $_POST['keyword'];
	$source = $_POST['source'];
		
	if($source == "youtube") {
		$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&format=5&max-results=10&start-index=1';
		$JSON = file_get_contents($url, true);	
		echo $JSON;
	 } 
	 else if($source == "vimeo") {
		$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&orderby=viewCount&max-results=10&start-index=1';
		$JSON = file_get_contents($url, true);	
		echo $JSON;
	 }
	 else if($source == "dailymotion") {
		$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&orderby=viewCount&max-results=10&start-index=1';
		$JSON = file_get_contents($url, true);	
		echo $JSON;
	 }
?>