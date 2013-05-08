<?php
/*
Specifications:

Photo Upload

The past events submission system will allow the administrator to submit short blurbs on past events to
the server, along with uploading photos that are associated with the event. 

	//upload photo to this past events album
			if (isset($_FILES['newphoto'])) {
				if ($_FILES['newphoto']['error'] == 0) {
					move_uploaded_file($_FILES['newphoto']['tmp_name'], 
						"./".$_FILES['newphoto']['name']);
					$_SESSION['photos'][ ] = $_FILES['newphoto']['name'];
					print("The file ".$_FILES['newphoto']['name']." was uploaded 
						successfully.\n");
					$fileName = $_FILES['newphoto']['name'];

				//get the caption from the textarea
					if(valid($_POST['caption'])){
						$caption = $_POST['caption'];
					}
					else{
						$caption = 'invalid caption';	
					}

				get the date value

				insert into the database

				set the date of the event

				} else {
					print("The file ".$_FILES['newphoto']['name']." was not 
						uploaded.\n");
				}
			}

*/
?>