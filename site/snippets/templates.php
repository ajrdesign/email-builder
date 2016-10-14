<h3 class="subheading all-caps" style="letter-spacing:3px;">Templates</h3>
<hr class="double">
<ul class="gallery">
  <?php foreach($site->page('templates')->children() as $email): ?>
  <a href="<?php echo $email->url() ?>">
  <li>
  	<?php if($image = $email->image()): ?>
		<img src="<?php echo $image->url() ?>" style="border:2px solid #ddd; margin-bottom:10px;">
	<?php endif ?>
    	<small class="mono italic"><?php echo $email->title()->html() ?></small>
  </li>
  </a>
  <?php endforeach ?>
</ul>
<hr class="double">
