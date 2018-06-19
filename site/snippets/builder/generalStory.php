<section class="media">
	<div class="img">
		<img src="<?= $data->generalImage() ?>" alt="">
	</div>
	<div class="bd">
		<h2>Image Link:</h2><?= $data->generalImageLink() ?>
		<h2>Alt Text:</h2><?= $data->generalImageAlt() ?>
	</div>	
</section>

<section>
<div class="bd">
		<h2 class=""><?= $data->headline() ?></h2>
		<?= $data->generalContent()->kt() ?>
		<?= $data->ctaUrl() ?>
	</div>
</section>