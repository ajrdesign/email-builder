<section>
	<h2>Button Call to Action <?= ($data->style() == 'true') ? '[Outlined]' : '[Blue]' ?></h2>
	<b><?= $data->text() ?></b>
	<br>
	<?= $data->url() ?>
</section>
