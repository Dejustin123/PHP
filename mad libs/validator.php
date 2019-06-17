
<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		for ($i=0; $i<count($antwoorden); $i++) {
			if (empty($antwoorden[$i])) {
				$errors[$i] = "required";
				$antwoorden[$i] = "";
			}
			else {
				$ans = test_input($antwoorden[$i]);
				if (!preg_match("/^[a-zA-Z ]*$/",$ans)) {
					$errors[$i] = "Only letters and white space allowed"; 
					$antwoorden[$i] = "";
			    }
			    else {
			    	$errors[$i] = " ";
			    }
			}
		}
		 if ($errors[0]==" "&&$errors[1]==" "&&$errors[2]&&$errors[3]==" "&&$errors[4]==" "&&$errors[5]==" "&&$errors[6]==" "&&$errors[7]==" ") {
		 	require "paniekR.php";
			echo "<script type='text/javascript'>document.getElementById('decontainer').classList.add('nee');</script>";
		 }
	}
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

 ?>