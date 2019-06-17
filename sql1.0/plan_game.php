<!DOCTYPE html>
<html lang='nl'>
<head>
	<title>iets plannen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require "datalayer.php"; ?>
	<?php 
	$inputs = array("game","starttijd", "uitlegger", "spelers");
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$valid = true;
		foreach($inputs as $value) {
			$data[$value] = "";
			$error[$value] = "";
			if (empty($_POST[$value])) {
				$error[$value] = "Required";
				$valid = false;
			}
			else {
				$data[$value] = test_input($_POST[$value]);
			}
		}
		if($valid) {
			insertplan($conn,$data);
			header('location: index.php');
			
		}
	}
	function test_input($data) {
	    $data = trim($data);
		$data = stripslashes($data);
	    $data = htmlspecialchars($data);
		return $data;
	}

	 ?>
	<div id='container'>
		<?php include "header.php"; ?>
		<div class='mid'>
			<form method="post" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]);?>">
				<select name="game">
					<option value="<?php echo $_POST['game']; ?>"><?php echo $_POST['game']; if(empty($_POST['game'])){echo "Kies een spel";} ?></option>
					<?php 
					$results = getGames($conn);
					foreach($results as $game) {
						echo "<option value='".$game['name']."'>".$game['name']."</option>";
					}
					 ?>
				</select> <?php echo $error['game']; ?> <br>
				Vul een starttijd in: <input type="time" value="<?php echo $_POST['starttijd']; ?>" name="starttijd"> <?php echo $error['starttijd']; ?> <br>
				Persoon die het uitlegt: <input type="text" value="<?php echo $_POST['uitlegger']; ?>" name="uitlegger"> <?php echo $error['uitlegger']; ?> <br>
				Vul spelers in: <input placeholder="gebruik een ," type="text" value="<?php echo $_POST['spelers']; ?>" name="spelers"> <?php echo $error['spelers']; ?> <br> 
				<input type="submit" value="submit">
			</form>
		</div>
	</div>
</body>
</html>