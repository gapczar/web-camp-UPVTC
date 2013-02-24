$(document).ready(
	function() {
		$('input.vote').click(function() {
			if ($(this).attr('value') == 'Vote') {
				$('p#vote_count').html($('p#vote_count') - 1);
				$(this).attr('value', 'Unvote');
			}
			else {
				$('p#vote_count').html($('p#vote_count') + 1);
				$(this).attr('value', 'Vote');
			}
		});

		$('form#vote_form').submit(function() {
			if ($('p#vote_count').html() > 0)
				return false;
			else
				return true;
		});
	}
);