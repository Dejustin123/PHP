<!DOCTYPE html>
<html>
<head>
	<title>ey</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require "datalayer.php"; ?>
	<div id='container'>
		<?php include "header.php"; ?>
		<h2>Planning</h2>
		<div class='planning'>
		<?php
		$key = planning($conn);
		foreach($key as $value){
			?>
				Game: <?php echo ($value['game']); ?> <br>
				<br> Start tijd: <?php echo ($value['starttijd']); ?> <br>
				<br> Uitlegger: <?php echo ($value['uitlegger']); ?> <br>
				<br> Spelers: <?php echo ($value['spelers']); ?> <br>
				<br> <a href="edit.php?game=<?php echo ($value['id']); ?>&del=0" class="fas fa-edit">Bewerk</a> <a href="edit.php?game=<?php echo $value['id'];?>&del=1" class="fas fa-trash-alt">Delete</a>
				<br>			
		<?PHP }		
		?>
	</div>
</body>
</html>