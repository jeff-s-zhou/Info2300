<?php

/*
Specifications:

Calendar Display System

This piece of functionality is the display functionality, which displays a 
Calendar containing all the previous events as well as future events. 
Previous events will also have a link to their specific photo gallery

$mysqli = new mysqli("");
if ($mysqli->errno) {
	print($mysqli->error);
	exit();
}

$query = get all the calendar dates;
$result = $mysqli->query($query);

while ($row = $result->fetch_assoc()) {

	foreach ($row as $type => $item) {

		//write the Month
		if ($type == Month) {
			print $item with proper div formatting
		}
		
		//do a new query, getting all the dates in the month
		$dResult = days in the specified month
			if (!$dResult) {
			print($mysqli->error);
			exit();
		}
		while ($dRow = $dResult->fetch_assoc()) {

			foreach ($dRow as $type => $item) {

				if ($type == event Name){
					$eventName = $item;
				}

				if ($type == event URL) {
					print(url with a link to the gallery page if the event has one);

				}
			}
		}
		
	}
}

*/

?>