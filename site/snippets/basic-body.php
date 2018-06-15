<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
	        <?php foreach($page->builder()->toStructure() as $section): ?>
	        	<?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
	        <?php endforeach ?>


	        <?php if($page->columnAreaOne()): ?>

<!-- Additional Information Section Area -->

				<table class="row collapse">
				  <tbody>
				    <tr>
					<?php foreach($page->columnItem()->toStructure() as $columnItem): ?>
				      <?php snippet('sections/extraSection' . $columnItem->_fields(), array('data' => $columnItem)) ?>
					<?php endforeach ?>
				    </tr>
				  </tbody>
				</table>

	        <?php endif ?>
