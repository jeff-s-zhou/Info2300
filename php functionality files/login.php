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
include(regexCheck);
if(not logged in){
	display login form

	if(valid login and matches hashed password){
	stores username and password as session variables
}

	else {
	display login error message
	}
}

else{
	display signed in message
}
*/
?>