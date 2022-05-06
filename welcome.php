<?php
	// get age from textfield, camel case always
  $age = $_POST['age'];
  $day = $_POST['day'];

  // if the user inputs their age as 5 or below or 95 or higher
  if ($age <= 5 || $age >= 95) {
    echo "Free admission";
  } 

  // else if user input for day is Tuesday or Thursday OR age is 12 - 21
  else if (($day == "Tuesday" || $day == "Thursday") || ($age >= 12 && $age <= 21)) {
    echo "Student discount";
  } 

  // else, if any other value
  else {
    echo "Full admission";
  }
?>


