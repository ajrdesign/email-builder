<section class="media">
	<div class="img">
		<?php if ($data->picture()->isNotEmpty()): ?>
			<img src="<?= $data->picture() ?>">
		<?php endif ?>
	</div>
	<div class="bd">
		<small style="font-size:12px;">Headline:</small>
		<h2 class="imageBanner-headline">
		    <?= $data->headline() ?>
		</h2>
		<small style="font-size:12px;">Copy:</small>
		<?= $data->text()->kt() ?>
		<small style="font-size:12px;">URL:</small><br>
		<?= $data->url() ?>
	</div>
	
  
</section>