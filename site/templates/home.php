<?php snippet('header') ?>
<div class="hero-unit hero-unit-darken" style="padding:74px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="subheading mega"><?php echo $page->title()->html() ?></h1>
			       <a href="panel/" class="btn btn-blue btn-large">Start Building</a>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php snippet('templates') ?>
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="hr double"></div>
		    <?php snippet('archives') ?>
		</div>
	</div>
</div>

<?php snippet('footer') ?>