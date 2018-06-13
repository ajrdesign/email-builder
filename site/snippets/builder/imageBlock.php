<section class="heroImage">
	<div class="media">
		<div class="bd">
			<h2>Image Link:</h2><?= $data->imageLink() ?>
			<h2>Alt Text:</h2><?= $data->imageAlt() ?>
		</div>
		<div class="img center">
			<img src="<?= $data->imageSection() ?>" alt="">
		</div>
		
	</div>
</section>
