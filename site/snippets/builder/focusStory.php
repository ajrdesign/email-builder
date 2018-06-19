<section class="media">
	<div class="img">
		<img src="<?= $data->focusImage() ?>" alt="">
	</div>
	<div class="bd">
		<h2>Image Link:</h2><?= $data->focusImageLink() ?>
		<h2>Alt Text:</h2><?= $data->focusImageAlt() ?>
	</div>
	<div class="bd">
		<h2 class="">
		    <?= $data->headline() ?>
		</h2>
		<?= $data->focusContent()->kt() ?>
		<?= $data->ctaUrl() ?>
	</div>
	
</section>