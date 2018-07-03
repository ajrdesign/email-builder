<!-- Column Item -->

  <th class="columns large-6 small-12 column-area first last">
    <table>
      <tr>
        <th>
          <a target="_blank" href="<?php echo $data->iconLink() ?>">
          <img src="<?php echo $data->imageIcon() ?>" class="float-left" alt="<?php echo $data->iconAlt() ?>"></a>
        </th>
        <th class="expander"></th>
      </tr>
      <tr>
        <th>
          <table class="spacer">
            <tbody>
              <tr>
                <td height="15px" style="font-size:15px;line-height:15px;">&#xA0;</td>
              </tr>
            </tbody>
          </table>
        </th>
        <th class="expander"></th>
      </tr>
      <tr class="column-area-text">
        <th>
          <a href="<?= $data->entryLink() ?>"><?= $data->entryTitle() ?></a>
        </th>
        <th class="expander"></th>
      </tr>
        <tr>
          <td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
            <?= $data->entryCopy()->kt() ?>  
          </td>
        </tr>
    </table>
  </th>

<!-- End of Column Item -->
