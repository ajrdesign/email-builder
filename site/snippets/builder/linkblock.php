<section style="margin-top:20px; margin-bottom:20px;height: 85px;">
	<div style="width:32%; float:left;">
		<h1>Link 1</h1>
		<b>Text:</b> <?= $data->text1() ?><br>
		<b>Link:</b> <?= $data->url1() ?>
	</div>

	<?php if (!$data->text2()->isEmpty()): ?>
		<div style="width:32%; float:left;">
			<h1>Link 2</h1>
			<b>Text:</b> <?= $data->text2() ?><br>
			<b>Link:</b> <?= $data->url2() ?>
		</div>
	<?php endif; ?>
	<?php if (!$data->text3()->isEmpty()): ?>
		<div style="width:32%; float:left;clear:right;">
			<h1>Link 3</h1>
			<b>Text:</b> <?= $data->text3() ?><br>
			<b>Link:</b> <?= $data->url3() ?>
		</div>
	<?php endif; ?>
</section>
