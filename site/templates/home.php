<?php snippet('header') ?>
<div class="hero-unit flush-margin-b" style="background-color:#ffd94b;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h6 class="subheading">While we are continuing to refine these new templates please send drafts to <a href="mailto:jsetzen@bluebeam.com">Jon Setzen</a> for a quick QA before it goes into Exact Target. This is a temporary process until we are confident we don't need to tweak the templates any more.</h6>
			</div>
		</div>
	</div>
</div>
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
		<div class="col-md-6">
			<?php snippet('templates') ?>
			
		</div>
		
		<div class="col-md-6">
			<h3 class="subheading all-caps" style="letter-spacing:3px;">Updates</h5>
				<hr class="double">
				<ul class="unstyled">
					<li>
						<small class="text-gray"><?php echo $site->page('updates')->children()->flip()->first()->when()->html() ?></small>
						<h6 class="mono italic space-bottom"><?php echo $site->page('updates')->children()->flip()->first()->title()->html() ?></h6>
						<p class="small"><?php echo $site->page('updates')->children()->flip()->first()->text()->kirbytext() ?></p>
					</li>
			</ul>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
			<hr class="double">
			<?php snippet('archives') ?>
		</div>
	</div>
</div>

<?php snippet('footer') ?>