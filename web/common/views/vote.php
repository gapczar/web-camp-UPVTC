	<div class="container">
		<div class="row">
			<h1>Choose Your Top 5 Apps!</h1>
			<h2>Remaining Votes: <p id="vote_count">5</p></h2>
		</div>

		<form id="vote_form" method="post" action="<?php echo Util::base_url('index.php/add_user_votes'); ?>">
			<div class="hero-unit apps-list">
				<?php for ($rowCount = 0; $rowCount < 10; $rowCount++) : ?>

					<div class="row">

						<?php for ($colCount = 0; $colCount < 5; $colCount++) : ?>
							<?php $ctr = $rowCount * 5 + $colCount; ?>

							<div class="image"><img src="<?php echo Util::base_url('images/').$app_list[$ctr]['icon']; ?>"/>
								<p><?php echo $app_list[$ctr]['name']; ?></p>
								<input type="hidden" style="display: none" name="app_id[]" value="<?php echo $app_list[$ctr]['app_id']; ?>" />
								<input class="vote" type="submit" value="Vote" />
								<input type="hidden" style="display: none" name="flag[]" />
							</div>

						<?php endfor; ?>

					</div>

				<?php endfor; ?>

			</div>
			<div class="row">
				<p id="submit-button"><input type="submit" value="Submit Votes"></p>
			</div>	
		</form>
	</div>