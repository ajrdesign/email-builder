<?php if(!$page->infoLinks()->empty()): ?>
	<hr>
	<table class="row info-link">
		<tr>
			<td class="wrapper">
				<?php foreach($page->infoLinks()->toStructure() as $infoLinks): ?>
					<table class="four columns info-link-block">
						<tr>
							<td class="left-text-pad">
								<a href="<?php echo $infoLinks->url() ?>"><?php echo $infoLinks->text() ?></a>
							</td>
						</tr>
					</table>
				<?php endforeach ?>
			</td>
		</tr>
	</table>
<?php endif ?>