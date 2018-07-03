
<!-- Start of Secondary Content Row -->

	<table class="row focusSecondaryStory">
		<tr>
			<td class="wrapper last">
				<table class="twelve columns">
					<tr>
						<td class="center">
							<a href="<?= $data->entryUrl()->text() ?>">
								<h4 class="focus">  <?= $data->entryHeadline()->text() ?></h4>
							</a>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table class="twelve columns">
					<tr>
						<td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
							<p><?= $data->entryContent()->kt() ?></p>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>

	<!-- Spacer -->

	<table class="spacer">
	  <tbody>
	    <tr>
	      <td height="75px" style="font-size:75px;line-height:75px;">&#xA0;</td>
	    </tr>
	  </tbody>
	</table>

	<!-- End of Spacer -->

<!-- End of Secondary Content Row -->