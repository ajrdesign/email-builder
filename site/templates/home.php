<?php snippet('header') ?>
<div class="hero-unit hero-unit-darken">
	<div class="container">
		<div class="row">
			<div class="col-md-12 center">
				<h1 class="subheading"><?php echo $page->title()->html() ?></h1>
			       <a href="panel/" class="btn btn-blue">Start Building</a>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php snippet('templates') ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		    <?php snippet('projects') ?>
		</div>
	</div>
</div>

<?php snippet('footer') ?>