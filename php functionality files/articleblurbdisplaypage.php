<?php
/*

Specifications: 

Article Blurb Display Page

The article
display system will then retrieve the article from the databases, display them by date, with a
standardized format. Articles will have individual php files which will be displayed using the
include function in php. Articles will have a collective php page that displays an article up to a
character limit, and then cut off with a link users can click to read more of the article. Using a
variable passed through the clicked url or session variables, the user will then reach an article
display page which displays all of one specific article. 

Tagging/Search Functionality –
These two pieces of interactivity will go hand-in-hand along with a display function to display
search results; the administrator will be able to give articles “tags” when they write/edit
articles. The tags will be submitted to the sql database upon submission of the article. The
article page will then have a search function which takes input from a search box and submits a
query to the the tags table. Form input will be checked via regex for malicious input. Finally, a
display function will return the resulting articles which had tags matching the search query and
display them on the page. Tags can also be clicked on, resulting all articles with the tag being
displayed, so essentially code-wise it’ll function with the tag clicked being put into the search
function.

	$mysqli = new mysqli("");
	if ($mysqli->errno) {
		print($mysqli->error);
		exit();
	}

	write search box, search box goes to fullarticledisplay.php

	$result = table of articles
	if (!$result) {
		print($mysqli->error);
		exit();
	}
	while ($row = $result->fetch_assoc()) {

		foreach ($row as $type => $item) {

			//write the article title
			if ($type == article title) {
				print $item
			}

			//write article content
			if ($type == article content){
				cut $item short to a certain character length
				print cut $item
				print url to go to the fullarticledisplay.php for a clicked article
			}

			//write tags
			if ($type == tag){
				print all the tags as links to fullarticledisplay.php,
				which then specifically handles if a tag is clicked
			}
			
			
		}
	}

?>