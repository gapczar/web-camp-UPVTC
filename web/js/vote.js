$(document).ready(
	function() {

		$('input.vote').click(function() {
			$(this).attr('disabled', 'disabled');
			$(this).next().removeAttr('disabled');
		});

		$('input.unvote').click(function() {
			$(this).attr('disabled', 'disabled');
			$(this).prev().removeAttr('disabled');
		});

	}
);