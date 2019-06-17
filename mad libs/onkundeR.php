<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$antwoorden = array($_POST["vraag1"], $_POST["vraag2"], $_POST["vraag3"], $_POST["vraag4"], $_POST["vraag5"], $_POST["vraag6"], $_POST["vraag7"]);
	 ?>


	<div id='container'>
		<?php require "menu.php"; ?>
		<div class='content'>
			<h2 class="title">Onkunde</h2>
			<span class='story'>
				Er zijn veel mensen die niet kunnen <?php echo $antwoorden[1-1]; ?>. Neem nou <?php echo $antwoorden[2-1]; ?>. Zelfs met de hulp van een <?php echo $antwoorden[4-1]; ?> of <?php echo $antwoorden[3-1]; ?> kan <?php echo $antwoorden[2-1]; ?> niet <?php echo $antwoorden[1-1]; ?> Dat heeft niet te maken met een gebrek aan <?php echo $antwoorden[5-1]; ?>. Maar met een teveel van <?php echo $antwoorden[6-1]; ?>. Te veel <?php echo $antwoorden[6-1]; ?> leid tot <?php echo $antwoorden[7-1]; ?> en dat is niet goed als je wilt <?php echo $antwoorden[1-1]; ?>. Helaas voor <?php echo $antwoorden[2-1]; ?>
			</span>
		</div>
		<?php require "footer.php"; ?>
	</div>
</body>
</html>