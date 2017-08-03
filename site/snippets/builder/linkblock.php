<section>
	<h1>Link 1</h1>
	<b>Text:</b> <?= $data->text1() ?><br>
	<b>Link:</b> <?= $data->url1() ?>
	<br>

	<?php if (!$data->text2()->isEmpty()): ?>
		<hr>
		<h1>Link 2</h1>
		<b>Text:</b> <?= $data->text2() ?><br>
		<b>Link:</b> <?= $data->url2() ?>
		<br>
	<?php endif; ?>
	<?php if (!$data->text3()->isEmpty()): ?>
		<hr>
		<h1>Link 3</h1>
		<b>Text:</b> <?= $data->text3() ?><br>
		<b>Link:</b> <?= $data->url3() ?>
	<?php endif; ?>
</section>
