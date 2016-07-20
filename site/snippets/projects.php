<h2>Latest Emails</h2>

<ul class="teaser cf">
  <?php foreach(page('email')->children() as $email): ?>
  <li>
    <h5><a href="<?php echo $email->url() ?>"><?php echo $email->title()->html() ?></a></h5>
  </li>
  <?php endforeach ?>
</ul>
