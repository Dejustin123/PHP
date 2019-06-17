<div class="container">
	<table border="1">


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
			insertplan($db,$data);
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
		<div class='mid'>
			<form method="post" action="<?php echo htmlspecialchars( $_SERVER["PHP_SELF"]);?>">
				<select name="game">
					<option value="<?php echo $_POST['game']; ?>"><?php echo $_POST['game']; if(empty($_POST['game'])){echo "Kies een spel";} ?></option>
					<?php 
					$results = getGames($db);
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
	
	</table>
</div>