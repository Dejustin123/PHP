<!DOCTYPE html>
<html>
<head>
	<title>ey</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php require "datalayer.php"; ?>
	<?php 
		if($_GET['del']=='1') {
			header("Location: delete.php?game=".$_GET['game']);
			exit();
		}
		$inputs = array("game", "starttijd", "uitlegger", "spelers");
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
				update($conn,$data);
				header('Location: planning.php');
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
			<?php
				$results2 = Idget($conn,$_GET['game']);
			 ?>
			<form method="post" action="edit.php?game=<?php echo $_POST['game']; ?>">
				<select name="game">
					<option value="<?php foreach($results2 as $key){echo $key['game'];} ?>"><?php foreach($results2 as $key){echo $key['game'];} ?></option>
					<?php 
					$results = getGames($conn);
					foreach($results as $game) {
						echo "<option value='".$game['name']."'>".$game['name']."</option>";
					}
					 ?>
				</select> <?php echo $error['game']; ?> <br>
				Vul een starttijd in: <input type="time" value="<?php foreach($results2 as $key){echo $key['starttijd'];} ?>" name="starttijd"> <?php echo $error['starttijd']; ?><br>
				uitlegger: <input type="text" value="<?php foreach($results2 as $key){echo $key['uitlegger'];} ?>" name="uitlegger"> <?php echo $error['uitlegger']; ?> <br>
				Vul spelers in: <input type="text" value="<?php foreach($results2 as $key){echo $key['spelers'];} ?>" name="spelers"> <?php echo $error['spelers']; ?> <br> 
				<input type="submit" value="submit">
			</form>
		</div>

	</div>
</body>
</html>