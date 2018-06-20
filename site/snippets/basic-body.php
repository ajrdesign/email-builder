<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
	        <?php foreach($page->builder()->toStructure() as $section): ?>
	        	<?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
	        <?php endforeach ?>


	        <?php if($page->columnItem()): ?>

<!-- Column Area Section -->

				<table class="container column-container">
				  <tbody>
				    <tr>
					<?php foreach($page->columnItem()->toStructure() as $columnItem): ?>
				      <?php snippet('sections/columnItem' . $columnItem->_fields(), array('data' => $columnItem)) ?>
					<?php endforeach ?>
				    </tr>
				  </tbody>
				</table>

<!-- End of Column Area Section -->


	        <?php endif ?>
