<!-- Column Item -->

  <th class="6 columns column-area">
    <table>
      <tr>
        <th><a target="_blank" href="<?php echo $data->iconLink() ?>">
          <img src="<?php echo $data->imageIcon() ?>" class="float-left" alt="<?php echo $data->iconAlt() ?>">
        </a></th>
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
      </tr>
      <tr class="column-area-text">
        <td>
          <a href="<?= $data->entryLink() ?>"><?= $data->entryTitle() ?></a>
        </td>
      </tr>
    </table>
  </th>

<!-- End of Column Item -->




