<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<!--if nkalogin na-->
			<a class="brand" href="">Mobile Apps Poll</a>
			<p class="navbar-text pull-right">myUsername
			<a href="">Logout</a>

			<!--if waray pa-->
			   <form class="navbar-form pull-right" id = "signin" action = "<?php echo Util::base_url('index.php/login'); ?>">
              <input class="span2" type="text" placeholder="Username" id = "username" />
              <input class="span2" type="password" placeholder="Password" id = "password"/>
              <button type="submit" class="btn">Sign in</button>
            </form>
            <script type = "text/javascript">
            	$(document).ready(function(){
            		
            		$("#signin").submit(function(){
      //       			$this = $(this);
      //       			// alert("asdadsas"+$("#email").val());
      //       			// alert($($(this).children("#email")).val());
      //       			// alert($(this).attr('action'));
      //       			// alert($($this).attr('action'));
      //       			$.ajax({
						//   type: 'POST',
						//   url: $($this).attr('action'),
						//   data: {username:$("#username").val(), password:$("#password").val()},
						//   success: function(data){
						//   	alert("success");
						//   	if( data.result == true )
						//   		window.location = data.message;
						//   	else
						//   		$($this).append("<span style = 'color:red;'>"+data.message+"</span>");
						//   },
						//   error: function(data){ alert('salamat');},
						//   dataType: json
						// });
            			
            			return false;	
            		});
            	});
            </script>
		</p>
		</div>

	</div>
</div>

