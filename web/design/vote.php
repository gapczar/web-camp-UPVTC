<?php
	require_once('design/nav.php');
?>
<html>
<head>
	<title>Poll Website for Mobile Apps</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">

</head>
<body>


	<div class="container">
		<div class="row">
			
				<h1>Choose Your Top 5 Apps!</h1>
				<h2>Remaining Votes: 5</h2>
			
		</div>

<div class="hero-unit apps-list">
	<?php for($rowCount = 1; $rowCount <= 10; $rowCount++):?>
		<div class="row">
			<?php for($colCount = 1; $colCount <= 5; $colCount++):?>
				<div class="image"><img src="design/img.png"/>
					<p>Plants vs. Zombies</p>
					<input type="submit" value="Vote" />
					<input type="submit" value="Unvote" disabled/>
				</div>
			<?php endfor;?>
		</div>
	<?php endfor;?>


</div>
		<div class="row">
			
				<p id="submit-button"><input type="submit" value="Submit Votes"></p>
			
		</div>	

	</div>
</body>
</html>