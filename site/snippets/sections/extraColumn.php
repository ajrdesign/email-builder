<?php foreach($page->extraSection() as $entry): ?>

        <th class="6 columns">
          <table>
            <tr>
              <th><a target="_blank" href="<?php echo $data->iconLink() ?>">
                <img src="<?php echo $data->imageIcon() ?>" width="" alt="<?php echo $data->iconAlt() ?>">
              </a></th>
            </tr>

            <tr>
            <td class="">
              <a href="<?= $data->entryLink() ?>"><?= $data->entryTitle() ?></a>
            </td>
          </table>
        </th>

<?php endforeach ?>
