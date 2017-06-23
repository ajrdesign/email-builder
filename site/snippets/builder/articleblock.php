<section>
  <div class="media">
		<div class="img">
			<img src="<?= $data->picture() ?>">
		</div>
		<div class="bd">
      <h5><?= $data->headline() ?></h5>
      <strong>Copy:</strong> <?= $data->text() ?></br>
      <strong>URL:</strong> <?= $data->url() ?></br>
      <strong>Call to Action:</strong> <?= $data->cta() ?>
		</div>
	</div>
</section>
