<div class="container">
 <h1>Welkom bij het php-framework.</h1>
 <p>Je bent nu in home/index.</p>
</div>
<div id='container'>
	<div class='mid'>
		<?php 
			$results = getGames($db);
			foreach($results as $game) { ?>
					<a target='_blank' href="game_detail.php?id=<?php echo $game['id']; ?>"><?php echo $game['name']."<br>"; ?></a>
			<?php } 
		 ?>
	</div>
</div>
