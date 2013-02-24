<?php
	require_once('common/views/nav.php');
?>
<html>
<head>
	<title>Poll Website for Mobile Apps</title>
	<link rel="stylesheet" type="text/css" href="<?php echo Util::base_url('css/style.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo Util::base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">

</head>
<body>


	<div class="container">
		<div class="row">
			<div class="span12">
				<h1>Vote for your fave web apps now!</h1>
			</div>
		</div>
		
		
			<div class="row span10 signup">
				<div class="span4">
					<p>Create Your Account</p>
				</div>
				<div class="span4">
					<form method="post" action="../controllers/user_controller.php">
					<p><input type="text" name="username" style="text" placeholder="Username"/></p>
					<p><input type="password" name="password" style="text" placeholder="Password"/></p>
					<p><input type="text" name="email" style="text" placeholder="Email Address"/></p>
					<p><input type="submit" value="Sign up!" /></p>
					</form>
				</div>
			</div>
		
		<div class="row">
			<div class="span12">
				Already have an account? Login <a href=""> here. </a>
			</div>
		</div>
	</div>
</body>
</html>