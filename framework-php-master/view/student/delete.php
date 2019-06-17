<div class="container">
	<?php 
		if($_SERVER["REQUEST_METHOD"] == "POST") {
			if($_POST['confirm']=='Ja') {
				snap($conn,$_GET['game']);
				header('Location: index.php');
			}
			elseif($_POST['confirm']=='Nee') {
				header('Location: index.php');
			}
		}
	 ?>
	<div id='container'>
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
</div>