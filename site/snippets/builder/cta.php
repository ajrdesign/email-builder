<section>
	<h2>Button Call to Action <?= ($data->style() == 'true') ? '[Outlined]' : '[Blue]' ?></h2>
	<b><?= $data->text() ?></b>
	<?= $data->url() ?>
	<h2>Link Call to Action</h2>
	<b><?= $data->textSecondary() ?></b>
	<?= $data->urlSecondary() ?>
</section>
