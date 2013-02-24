
	<div class="container">
		<div class="row">
			
				<h1>Vote for your fave mobile apps now!</h1>
		</div>
		
		<div class="row signup">
			<div class="span2"></div>
			<div class="span6 hero-unit">
				<div class="row">
					<div class="span3 instruction">
						<p>Create</p>
						<p class="thinText">An</p>
						<p class="emphasizedText">Account</p>
					</div>
					<form method="post" action="<?php echo Util::base_url('index.php/add_user'); ?>">
						<div class="span2" id="forms">
							<p><input type="text" name="username" style="text" placeholder="Username"/></p>
							<p><input type="password" name="password" style="text" placeholder="Password"/></p>
							<p><input type="email" name="email" style="text" placeholder="Email Address"/></p>
							<p><input type="submit" value="Continue"/></p>
						</div>
					</form>
				</div>
				<div class="row">
					Already have an account? Login <a href=""> here. </a>
				</div>	
			</div>
	</div>
	</div>
