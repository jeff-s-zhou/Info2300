<?php
/*

Specifications: 

Full Article Display System/Tagging and Search Functionality

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

if(search query is typed in search box){
	//call the tagSearch function with search box query
	mysql query = tagSearch(string query)
	display mysql query results
}

if(tag on an article is clicked){
	//call the tagSearch function with the tag clicked
	mysql query = tagSearch(string tagname)
	display mysql query results
}

else{
	query = display the article passed through the url from the article blurb page
}
*/

?>