<!DOCTYPE html>
<html lang='nl'>
<head>
	<title>ey</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require "datalayer.php"; ?>
	<div id='container'>
		<div class='header-div'>
			<?php include "header.php"; ?>
		</div>
		<div class='mid'>
			<?php 
				$results = getGames($conn);
				foreach($results as $game) { ?>
					<a target='_blank' href="game_detail.php?id=<?php echo $game['id']; ?>"><?php echo $game['name']."<br>"; ?></a>
				<?php } 
			 ?>
		</div>
	</div>
	<script src='app.js' type="text/javascript"></script>
</body>
</html>