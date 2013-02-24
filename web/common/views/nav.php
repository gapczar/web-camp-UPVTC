<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!--if nkalogin na-->
			<a class="brand" href="">Mobile Apps Poll</a>
<!-- 			<p class="navbar-text pull-right">myUsername
			<a href="">Logout</a> -->

			<!--if waray pa-->
<!-- 			  <form class="navbar-form pull-right" id = "signin" action = "<?php echo Util::base_url('index.php/login'); ?>">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form> -->
            <script type = "text/javascript">
            	$(document).ready(function(){
            		$("#signin").submit(function(param){
      //       			$.ajax({
						//   type: "POST",
						//   url: $(this).attr('action'),
						//   data: {username:$(this).children(":first").attr('value')},
						//   success: success,
						//   dataType: dataType
						// });
            			$(this).children(":first").attr('value');
            			return false;	
            		});
            	});
            </script>
		</p>
		</div>

	</div>
</div>

