<!DOCTYPE html>
<html>
<head>
	<title>verwijderen</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require "datalayer.php"; ?>
	<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if($_POST['confirm']=='Ja') {
				snap($conn,$_GET['game']);
				header('Location: planning.php');
			}
			elseif($_POST['confirm']=='Nee') {
				header('Location: planning.php');
			}
		}
	 ?>
	<div id='container'>
		<?php include "header.php"; ?>
		<?php
			$results =Idget($conn,$_GET['game']);
			foreach($results as $key) { ?>
				<div class='planning'>
					Game: <?php echo $key['game']; ?> <br>
					<br> Start-tijd: <?php echo $key['starttijd']; ?> <br>
					<br> Uitlegger(s): <?php echo $key['uitlegger']; ?> <br>
					<br> Speler(s): <?php echo $key['spelers']; ?> <br>
					<br> wilt u de thanos snap uitvoeren?(verwijderen) <form method="post" action="<?php echo $_SERVER['SELF_PHP']; ?>"><input name="confirm" value="Ja" type="submit"><input name="confirm" value="Nee" type="submit"></form>
				</div>
			<?php } ?>
	</div>
</body>
</html>
