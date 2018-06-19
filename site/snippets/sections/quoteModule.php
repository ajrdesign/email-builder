<table class="row callout quoteModule">
	<tr>
		<th class="wrapper last callout-inner">
			<a href="<?= $data->quoteLink() ?> ">
				<table class="twelve columns">
					<tr>
						<td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
							<p class="quote-text"><?= $data->quote() ?></p>
						</td>
					</tr>
					<tr>
						<td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
							<p class="quote-source"><?= $data->quoteSource() ?></p>
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
      <td height="75px" style="font-size:75px;line-height:75px;">&#xA0;</td>
    </tr>
  </tbody>
</table>

<!-- End of Spacer -->