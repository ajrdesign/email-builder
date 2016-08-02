<?php snippet('header') ?>
<div class="hero-unit hero-unit-darken">
	<h1 class="subheading center"><?php echo $page->title() ?></h1>
</div>
<div class="container">
	<div class="col-md-10 col-md-offset-1">
		
		
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