<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/idk_template.dwt" codeOutsideHTMLIsLocked="false" -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="markitup/sets/default/set.js"></script>
<link rel="stylesheet" type="text/css" href="markitup/skins/markitup/style.css" />
<link rel="stylesheet" type="text/css" href="markitup/sets/default/style.css" />
<script type="text/javascript" >
   $(document).ready(function() {
      $("#markItUp").markItUp(mySettings);
   });
</script>
</head>

<body>
<?php
/*

Specifications: 

Article Submission System

The article submission system will take content submitted through a textbox only available to 
administrators and send it to the mysql database. 

Submission System
$mysqli = new mysqli("");
if ($mysqli->errno) {
	print($mysqli->error);
	exit();
}

include(regexCheck());

if(logged in){
	if(isset(Submit button)){
		$query = insert query
		$result = $mysqli->query($query);
	}
}


*/
?>

<form action="articlesubmission.php" method="post">
Article Title: <input type ="text" name="title" /></br>
</br>Text:</br><textarea id="markItUp" name="text"></textarea></br>
Tags(separated by commas, ie. "basics, career, technical"):
</br><textarea name="tags"></textarea>
<input type="submit" value="Submit" name="submit"/>
</form>

</body>
</html>