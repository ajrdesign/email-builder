<?php if ($data->picture()->isNotEmpty()): ?>
	<img src="<?= $data->picture() ?>" alt="">
<?php endif ?>
<br>
<?= $data->text() ?>
