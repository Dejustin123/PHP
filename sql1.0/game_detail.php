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
		<?php include "header.php"; ?>
				<?php 
				$stmt = $conn->prepare("SELECT * FROM games WHERE id=:id");
				$stmt->execute([':id' => $_GET['id']]);
				foreach($stmt as $key) {
					echo "<img alt='game' src='".$key['image']."'>";
					echo $key['name']."<br>";
					echo "<br>Minimaal aantal spelers: ".$key['min_players']."<br>Maximaal aantal spelers: ".$key['max_players']."<br>";
					echo "<br>Tijd nodig om te spelen: ".$key['play_minutes']." min<br>";
					echo "Tijd nodig om uit te leggen: ".$key['explain_minutes']." min<br>";
					echo "<br>Description: ".$key['description'];
					echo "Required skills: ".$key['skills']."<br>";
					echo "Official site: "?><a target='_blank' href="<?php echo $key['url'] ?>"><?php echo $key['url'] ?></a><br><?php ;
				
					?>
				<div class="embed-responsive embed-responsive-16by9">
					<?php	echo "<br>Uitleg ofzo: <br>".$key['youtube'];
					}
					$conn=null;
					?>
				</div>
			
		</div>
	
</body>
</html>