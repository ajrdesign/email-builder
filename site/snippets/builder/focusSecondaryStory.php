<table class="row" id="contentBlock">
	<tr>
		<td class="wrapper last">

			<table class="twelve columns">
				<tr>
					<td class="text-pad center">
						<strong><?= $data->entryHeadline()->text() ?></strong> 
					</td class="text-pad center">
				</tr>
				<tr>
					<td>
						<?= $data->entryContent()->kt() ?>  
					</td>
				</tr>
				<tr>
					<td>
						<?= $data->entryUrl()->text() ?>  
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>