<?php if(!$page->infoLinks()->empty()): ?>
	<hr>
	<table class="row info-link">
		<tr>
		<?php foreach($page->infoLinks()->toStructure() as $infoLinks): ?>
			<td class="wrapper">
				
					<table class="four columns info-link-block text-center">
						<tr>
							<td class="left-text-pad">
								<a href="<?php echo $infoLinks->url() ?>"><p><?php echo $infoLinks->text() ?></p></a>
							</td>
						</tr>
					</table>
				
			</td>
		<?php endforeach ?>
		</tr>
	</table>
<?php endif ?>