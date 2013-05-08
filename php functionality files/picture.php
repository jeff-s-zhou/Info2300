<?php
/*
Specifications:

Picture Display

When the thumbnails are clicked,
they will redirect to pages containing the full photos as specified by session variables or
variables passed through the form action url.

//store the current albumID and photoID the user is viewing

if (isset( $_GET['photoID'])) {

	$_SESSION["photo_ID"]= $_GET['photoID'];
	$photoID = $_GET['photoID'];

}

else {
	$photoID= $_SESSION['photo_ID'];
}


if (isset( $_GET['albumID'])) {

	$_SESSION["album_ID"]= $_GET['albumID'];
	$albumID = $_GET['albumID'];

}

else {
	$albumID = $_SESSION["album_ID"];
}
?>

print a breadcrumb trail to allow the user to go back

//figure out the mysqli
$mysqli = new mysqli("");
if ($mysqli->errno) {
	print($mysqli->error);
	exit();
}

//display the specified photo
$query = "SELECT * FROM Photos NATURAL JOIN PhotosInAlbum WHERE PhotoID = '$photoID' AND AlbumID = '$albumID'";
$result = $mysqli->query($query);
if (!$result) {
	print($mysqli->error);
	exit();
}

while ($row = $result->fetch_assoc()) {
	foreach ($row as $type => $item) {
		if ($type == "PhotoID"){
			$photoID = $item;
		}

		if ($type == "PhotoURL") {
			print("<img src=\"$item\" alt=\"$photoID\"><br>");
		}

		if ($type == "Caption") {
			print("Caption:");
			print("$item");
		}

		if ($type == "DateTaken"){
			print("Date Taken: $item<br>");
		}

		if ($type == list of tagged names){
			print(list of tagged names)
		}
	}
}
$mysqli->close();
*/
?>