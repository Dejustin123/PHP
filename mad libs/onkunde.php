<!DOCTYPE html>
<html>
<head>
	<title>Onkunde</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
				header('Location: onkundeR.php?'. http_build_query($data));
			 
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
		<div class='content' class='one'>
			<h2 class="title">Er heerst paniek...</h2>
			<div class='vragen'>
				<p class="q">Wat zou je graag willen kunnen?</p> <br> <!-- 1 -->
				<p class="q">Met welk persoon kun je goed opschieten?</p> <br><!-- 2 -->
				<p class="q">Wat is je favorite getal?</p> <br><!-- 3 -->
				<p class="q">Wat heb je altijd bij je als je op vakantie gaat?</p> <br><!-- 4 -->
				<p class="q">Wat is je beste persoonlijke eigenschap?</p> <br><!-- 5 -->
				<p class="q">Wat is je slechtste persoonlijke eigenschap?</p> <br><!-- 6 -->
				<p class="q">Wat is het ergste wat je kan overkomen?</p> <br><!-- 7 -->
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