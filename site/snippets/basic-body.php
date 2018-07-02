<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
	        <?php foreach($page->builder()->toStructure() as $section): ?>
	        	<?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
	        <?php endforeach ?>


	        <?php if($page->columnItem()): ?>

<!-- Column Area Section -->
				<table class="spacer">
				  <tbody>
				    <tr>
				      <td height="40px" style="font-size:40px;line-height:40px;">&#xA0;</td>
				    </tr>
				  </tbody>
				</table>
				<table align="center" class="container column-container">
				  <tbody>
				    <tr>
				      <td>
				        <table class="row" align="center">
				          <tbody>
				            <tr>
				             	<?php foreach($page->columnItem()->toStructure() as $columnItem): ?>
								     <?php snippet('sections/columnItem' . $columnItem->_fields(), array('data' => $columnItem)) ?>
								<?php endforeach ?>
				            </tr>
				          </tbody>
				        </table>
				      </td>
				    </tr>
				  </tbody>
				</table>

<!-- End of Column Area Section -->


	        <?php endif ?>
