<section class="imageBanner"
>
	<?php if ($data->picture()->isNotEmpty()): ?>
		<img src="<?= $data->picture() ?>" alt="">
	<?php endif ?>
	<h2 class="imageBanner-headline">
		<?= $data->text() ?>
	</h2>
</section>