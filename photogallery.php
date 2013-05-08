<?php
/*

Specifications:

Past Events Photo Gallery Display

The Past Events Photo Gallery display system will display each event blurb along with thumbnails of the pictures
from the event. The thumbnails will be created using its own php function which will take an
image input and produce a thumbnail in a thumbnail folder. When the thumbnails are clicked,
they will redirect to pages containing the full photos as specified by session variables or
variables passed through the form action url. 

get all the albums from the database and list their pictures

	include(createThumbnail);
	$mysqli = new mysqli("");
	if ($mysqli->errno) {
		print($mysqli->error);
		exit();
	}
	$result = table of past events
	if (!$result) {
		print($mysqli->error);
		exit();
	}
	while ($row = $result->fetch_assoc()) {

		foreach ($row as $type => $item) {

			//write the album name
			if ($type == "AlbumName") {
				print $item
			}

			//write caption
			if ($type == "caption"){
				print $caption
			}
			
			//do a new query, getting the photos from the past events
			$pResult = photos from the past event
				if (!$pResult) {
				print($mysqli->error);
				exit();
			}
			while ($pRow = $pResult->fetch_assoc()) {

				foreach ($pRow as $type => $item) {

					if ($type == "PhotoID"){
						$photoID = $item;
					}

					if ($type == "PhotoURL") {
						createThumbnail($item);
						print("<a href = \"picture.php?photoID=$photoID&albumID=$albumID\"><img src=\"./thumbs/$item\" alt=\"$photoID\"></a></div>");

					}
				}
			}
			
		}
	}
	}

	$mysqli->close();
*/
?>