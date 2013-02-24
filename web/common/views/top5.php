<?php
	require_once('design/nav.php');
?>
	<div class="container">
		<div class="row">
			
				<h1>Your Top 5 Apps</h1>
			
		</div>
		<div class="hero-unit apps-list">

		<div class="row">
			<?php for($colCount = 1; $colCount <= 5; $colCount++):?>
				<div class="image"><img src="design/img.png"/>
					<p>Plants vs. Zombies</p>

				</div>
			<?php endfor;?>
		</div>


		</div>
		
		

	</div>