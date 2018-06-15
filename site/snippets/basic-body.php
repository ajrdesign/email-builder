<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
	        <?php foreach($page->builder()->toStructure() as $section): ?>
	        	<?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
	        <?php endforeach ?>

	        <?php foreach($page->minorArea()->toStructure() as $minor): ?>
	        	<?php snippet('sections/extraSection' . $minor->_fieldset(), array('data' => $minor)) ?>
	        <?php endforeach ?>
