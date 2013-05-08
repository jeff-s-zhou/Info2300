<?php
//store all miscellaneous functions in here

/*

Specifications:

Thumbnail Creation Function

Create a thumbnail of input image file name
*/
function createThumbnail($imageName, $size){
	$img = imagecreatefromjpeg($imageName);
	$width = imagesx($img);
	$height = imagesy($img);
	$new_img = imagecreatetruecolor($size, $size);
	imagecopyresampled($new_img, $img, 0, 0, 0, 0, $size, 
		$size, $width, $height);
	imagejpeg($new_img, "./thumbs/".$imageName);
	imageDestroy($img);
	imageDestroy($new_img);
}

//checks if the user is logged in, returns a boolean; true if logged in, false otherwise
function loggedIn(){
	return isset($_SESSION['logged_in']);
}

/*checks if an entry is valid, returns a boolean; true if valid entry, false otherwise.
There's likely a better way to do this, so feel free to change it up.
*/
function valid($string){
	return preg_match('/^[a-zA-Z0-9.!\'\"\s-,]+$/', $string);
}

?>