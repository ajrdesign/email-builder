<h5 class="subheading center">Archives</h5>
<hr class="double">
<ul class="gallery gallery-email-categories">
  <?php foreach($pages->visible() as $email): ?>
  <a href="<?php echo $email->url() ?>">
  <li class="center">
    	<img src="<?php echo $email->logo() ?>">
    	<small class="mono italic"><?php echo $email->title()->html() ?></small>
  </li>
  </a>
  <?php endforeach ?>
</ul>
