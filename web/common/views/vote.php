	<div class="container">
		<div class="row">
				<h1 class="normalText">Choose Your <span class="emphasizedText">Top 5</span> Apps!</h1>
				<h2 class="thinText">Remaining Votes: <span id="vote_count">5</span></h2>
		</div>

		<form id="vote_form" method="post" action="<?php echo Util::base_url('index.php/add_user_votes'); ?>">
			<div class="scrollable">
				<div class="row hero-unit">
					<div class="apps-list">
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
				</div>
			</div>
			<div class="row">
				<p id="submit-button"><input type="submit" value="Submit Votes"></p>
			</div>	
		</form>
	</div>
