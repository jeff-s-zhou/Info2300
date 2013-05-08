<?php

/*
Specifications: This is the form where the majors from the questionnaire are returned by calculating compatibility between majors. Compatability is calculated
by summing the attributes of all the questions (each question carries different attributes according to what it asks) and comparing the final sums to the profile
of the different majors. Because we are using a scale system on our questionnaire, we first need to adjust the score of a question before we can sum it.

$mysqli = new mysqli();
if ($mysqli->errno) {
print($mysqli->error);
exit();
}

//store values from questions into calculation database, first check if posted
if (isset $_POST["ALL QUESTIONS"){
	$questionid_value = $_POST["questionid_value"]; do this for all questions (loop)
}

//we can use an array of numbers to have our input values stored in. For each question attribute,
	$inputvaluearray = SELECT [attribute] FROM questions database; FOR ALL ATTRIBUTES
	//so now we have an array of size [number of attributes] with all values set to 0

//next determine the value to be assigned to the particular question. remember we are using a scale of 1-5 (e.g. how much do you enjoy x, with 1 being strong dislike
and 5 being highly enjoy), so 1 and 2 questionid_values will make the inputvalue negative while 3 will return a inputvalue of 0
while (questions remaining){
	//find the attributes of the current question, pull up in array format (matches $inputvaluearray format as well)
	$tempvaluearray = SELECT [attribute] FROM questions database WHERE $questionid = Qid; FOR ALL ATTRIBUTES
	if ($questionid_value == 1){
		while ($tempvaluearray not looped through){
			$tempvaluearray[counter] = $tempvaluearray[counter] * -1.5;
		}
	}
	if ($questionid_value == 2){
		while ($tempvaluearray not looped through){
			$tempvaluearray[counter] = $tempvaluearray[counter] * -1;
		}
	}	
	if ($questionid_value == 3){
		while ($tempvaluearray not looped through){
			$tempvaluearray[counter] = $tempvaluearray[counter] * 0;
		}
	}	
	if ($questionid_value == 4){
		//default case, don't need to change anything
	}
	if ($questionid_value == 5){
		while ($tempvaluearray not looped through){
			$tempvaluearray[counter] = $tempvaluearray[counter] * 1.5;
		}
	}
	//now our $tempvaluearray has been adjusted. we can now add these results to our $inputvaluearray
	while ($tempvaluearray not looped through){
		$inputvaluearray[counter] = $tempvaluearray[counter] + $inputvaluearray[counter];
	}
}

//At the end, we have an array of values for question attributes which have been summed. We will now search the majors database for majors which match this profile
SELECT majors FROM majors database WHERE majors [match function] $inputvaluearray
We will need to discuss further with our student group how majors will align
?>
