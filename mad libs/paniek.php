<!DOCTYPE html>
<html>
<head>
	<title>Er heerst paniek...</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		$antwoorden = array("vraag1","vraag2","vraag3","vraag4","vraag5","vraag6","vraag7","vraag8");
		
		
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$valid = true;
			foreach($antwoorden as $ant ) {
				$data[$ant] = "";
				$dataErr[$ant] = ""; 
				if (empty($_POST[$ant])) {

					$valid=false;
					$dataErr[$ant] = "required";
				}
				else {
					$data[$ant]= test_input($_POST[$ant]);
				}
		
			}
			if($valid){
				header('Location: paniekR.php?'. http_build_query($data));
			 
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
		<?php require "menu.php"; ?>

		<div class='content' id='one' class='one'>
			<h2 class="title">Er heerst paniek...</h2>
			<div class='vragen'>
				<p class="q">Welk dier zou je nooit als huisdier willen?</p> <br> <!--1-->
				<p class="q">Wie is de belangrijkste persoon in je leven?</p> <br><!--2-->
				<p class="q">In welk land wil je graag wonen?</p> <br><!--3-->
				<p class="q">Wat doe je als je je verveelt?</p> <br><!--4-->
				<p class="q">Met welk speelgoed speelde je als kind het meest?</p> <br><!--5-->
				<p class="q">Bij welke docent spijbel je het liefst?</p> <br><!--6-->
				<p class="q">Als je €100.000 had, wat zou je dan kopen?</p> <br><!--7-->
				<p class="q">Wat is jou favorite bezigheid?</p> <br><!--8-->
			</div>

			<div class='antwoorden'>
				<form method="post" action="<?php echo htmlspecialchars('paniek.php');?>">
					<input class="a" type="text"value="<?php echo $data["vraag1"]; ?>" name="vraag1"><span class="error">*<?php echo $dataErr["vraag1"]; ?><br>
					<input class="a" type="text"value="<?php echo $data["vraag2"]; ?>" name="vraag2"><span class="error">*<?php echo $dataErr["vraag2"]; ?><br>
					<input class="a" type="text"value="<?php echo $data["vraag3"]; ?>" name="vraag3"><span class="error">*<?php echo $dataErr["vraag3"]; ?><br>
					<input class="a" type="text"value="<?php echo $data["vraag4"]; ?>" name="vraag4"><span class="error">*<?php echo $dataErr["vraag4"]; ?><br>
					<input class="a" type="text"value="<?php echo $data["vraag5"]; ?>" name="vraag5"><span class="error">*<?php echo $dataErr["vraag5"]; ?><br>
					<input class="a" type="text"value="<?php echo $data["vraag6"]; ?>" name="vraag6"><span class="error">*<?php echo $dataErr["vraag6"]; ?><br>
					<input class="a" type="text"value="<?php echo $data["vraag7"]; ?>" name="vraag7"><span class="error">*<?php echo $dataErr["vraag7"]; ?><br>
					<input class="a" type="text"value="<?php echo $data["vraag8"]; ?>" name="vraag8"><span class="error">*<?php echo $dataErr["vraag8"]; ?><br>
					<input class="a" type="submit" name="submit" value="Submit">
				</form>	
			</div>
		</div> 
		<?php require "footer.php"; ?>
	</div>
</body>
</html>