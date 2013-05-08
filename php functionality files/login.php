<?php
/*
Specifications:

Login System

The login system will provide the club president functionality to update the site's dynamic
content. Because the club does not need a login system for users, there will be a single
username and password to access the administrator privileges and the login page will
provided through a separate url on the site not directly linked to on the main page for security
reasons. The password will be hashed via sha256. Once logged in, session variables will track
whether or not the user is logged in throughout the website, and will be destroyed once the
user logs out.
*/
session_start(); // Top of page
?>

<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/idk_template.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>

<?php
include 'miscfunctions.php';

$badLogin = false;

//if submit button is pressed and username and password match, store the session variable loggedIn to true
if(isset($_POST['login'])){
	//if the form entries are valid
	if(valid($_POST['username']) && valid($_POST['password'])){

		//if the form entries match username and password
		if( $_POST['username'] == 'admin' && hash('sha256', $_POST['password']) == '25500dbf53b1f47a8e10368385be8f7960186b3690a9b3a63c97d1a9a1bbbb9c'){
		$_SESSION['logged_in'] = true;
		} 
		else {
			$badLogin = true;
		}
	} 
	else {
		$badLogin = true;
	}
}

if(!loggedIn()){
	//display login form
?>

<form action="login.php" method="post">
	Username: <input type ="text" name="username" />
	Password: <input type ="password" name="password" />
	<input type="submit" value="Submit" name="login"/>
</form>

<?php
}

if($badLogin){
	print("You have entered incorrect information, please try again");
}

elseif(loggedIn()){
	print("Welcome, administrator. Click <a href=\"index.php\">here</a> to return to the home page.");
}
?>


</body>
</html>