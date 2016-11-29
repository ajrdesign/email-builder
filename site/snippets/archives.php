<h3 class="subheading all-caps" style="letter-spacing:3px;">Archives</h5>
	<hr class="double">
<ul class="unstyled">
  <?php foreach($pages->visible() as $email): ?>
  
  <li>
  	<small class="label label-info"><?php echo $email->children()->count() ?></small>
  	<span class="mono epsilon italic"><a href="<?php echo $email->url() ?>"><?php echo $email->title()->html() ?></a></span>
  	

  	<p><?php echo $email->description()->kt() ?></p>
  </li>
  
  <?php endforeach ?>
</ul>
