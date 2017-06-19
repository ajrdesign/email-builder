<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
	        <?php foreach($page->builder()->toStructure() as $section): ?>
	        	<?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
	        <?php endforeach ?>

<!-- Additional Info Links Loop -->
          	<?php if(!$page->infoLinks()->empty()): ?>
				<table class="row twelve info-link">
					<tr>
					<?php foreach($page->infoLinks()->toStructure() as $infoLinks): ?>
						<td class="wrapper">
								<table class="four column">
									<tr>
										<td class="text-pad text-center">
											<a href="<?php echo $infoLinks->url() ?>"><p><?php echo $infoLinks->text() ?></p></a>
										</td>
									</tr>
								</table>
						</td>
						<?php endforeach ?>
						</tr>
				</table>
			<?php endif ?>