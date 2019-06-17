<div id='container'>
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