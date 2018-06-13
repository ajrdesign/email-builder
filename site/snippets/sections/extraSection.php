  <table class="row collapse">
  <tbody>
    <tr>

      <?php foreach($page->extraSection() as $entry): ?>

        <th class="small-6 large-6 columns last">
          <table>
            <tr>
              <th><a target="_blank" href="<?php echo $data->iconLink() ?>">
                <img src="<?php echo $data->imageIcon() ?>" width="200" alt="<?php echo $data->iconAlt() ?>">
              </a></th>
            </tr>

            <tr>
            <td class="right-text-pad">
              <a href="<?= $data->entryLink() ?>"><?= $data->entryTitle() ?></a>
            </td>
          </table>
        </th>

      <?php endforeach ?>

    </tr>
  </tbody>
</table>



