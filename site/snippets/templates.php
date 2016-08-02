<h5 class="subheading center">Templates</h5>
<hr class="double">
<ul class="gallery">
  <?php foreach($site->page('templates')->children() as $email): ?>
  <a href="<?php echo $email->url() ?>">
  <li class="center">
  	<?php if($image = $email->image()): ?>
		<img src="<?php echo $image->url() ?>" style="border:2px solid #ddd; margin-bottom:10px;">
	<?php endif ?>
    	<small class="mono italic"><?php echo $email->title()->html() ?></small>
  </li>
  </a>
  <?php endforeach ?>
</ul>
