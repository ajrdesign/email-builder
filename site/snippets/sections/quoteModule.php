<table class="row-override callout quoteModule" >
	<tr>
		<th class="last callout-inner">
			<a href="<?= $data->quoteLink() ?> ">
				<table class="large-12 small-12 columns">
					<tr>
						<td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
							<p class="quote-text"><?= $data->quote() ?></p>
						</td>
					</tr>
				</table>
				<table class="spacer">
				  <tbody>
				    <tr>
				      <td height="25px" style="font-size:25px;line-height:25px;">&#xA0;</td>
				    </tr>
				  </tbody>
				</table>
				<table class="large-12 small-12 columns quote-source">
					<tr>
						<td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
							<p><?= $data->quoteSource() ?></p>
						</td>
					</tr>
					<tr>
						<td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
							<p><?= $data->quoteCompany() ?></p>
						</td>
					</tr>
				</table>
			</a>
		</th>
	</tr>
</table>


<!-- Spacer -->

<table class="spacer">
  <tbody>
    <tr>
      <td height="25px" style="font-size:25px;line-height:25px;">&#xA0;</td>
    </tr>
  </tbody>
</table>

<!-- End of Spacer -->