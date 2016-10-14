<?php snippet('header') ?>
<div class="hero-unit hero-unit-darken">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="subheading mega"><?php echo $page->title() ?></h1>
				<p class="lead"><?php echo $page->description() ?></p>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="col-md-12">
		<hr class="double">
		<table class="table">
			<tr class="mono italic small">
				<th>Label</th>
				<th>Template</th>
				<th>Last Modified</th>
				<th>Edit</th>
			</tr>
		  <?php foreach($page->children() as $email): ?>
		  <tr>
		  	<td>
		  		<a href="<?php echo $email->url() ?>">
		  		<?php echo $email->title()->html() ?>
		  		</a>
		  	</td>
		  	<td>
		  		<?php echo $email->template() ?>
		  	</td>
		  	<td>
		  		<?php echo $email->modified('d/m/Y') ?>
		  	</td>
		  	<td>
				  <a href="<?php echo $site->url() ?>/panel/pages/<?php echo $email->uri() ?>/edit">Edit</a>
		  	</td>
		  </tr>
		  <?php endforeach ?>
		</table>

	</div>
</div>

<?php snippet('footer') ?>