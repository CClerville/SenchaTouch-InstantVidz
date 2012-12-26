<?php
// Author: Chris Clerville

$API_KEY = 'YOUR_API_KEY';

$keyword = $_POST['keyword'];
$source = $_POST['source'];


if($source == "youtube") {
	$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&format=5&max-results=1&start-index=1';
	$JSON = file_get_contents($url, true);	
	echo $JSON;
 } 
 else if($source == "vimeo") {
	$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&orderby=viewCount&max-results=3&start-index=1';
 	$JSON = file_get_contents($url, true);	
 	echo $JSON;
 }
 else if($source == "dailymotion") {
	$url = 'http://api.camideo.com/?key='. $API_KEY .'&q='. $keyword .'&source='. $source .'&page=1&response=json&orderby=viewCount&max-results=3&start-index=1';
 	$JSON = file_get_contents($url, true);	
 	echo $JSON;
 }

?>