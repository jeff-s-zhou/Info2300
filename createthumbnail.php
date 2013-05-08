<?php

/*

Specifications:

Thumbnail Creation Function

Create a thumbnail of input image file name
*/
function createThumbnail($imageName)
{
	$img = imagecreatefromjpeg($imageName);
	$width = imagesx($img);
	$height = imagesy($img);
	$new_img = imagecreatetruecolor(200, 200);
	imagecopyresampled($new_img, $img, 0, 0, 0, 0, 200, 
		200, $width, $height);
	imagejpeg($new_img, "./thumbs/".$imageName);
	imageDestroy($img);
	imageDestroy($new_img);
}
?>