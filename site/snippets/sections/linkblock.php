<table class="row twelve info-link">
  <tr>
    <td class="wrapper <?php ecco($data->text2()->isEmpty() && $data->text3()->isEmpty(), 'last') ?>">
        <table class="<?php ecco($data->text2()->isEmpty() && $data->text3()->isEmpty(), 'twelve') ?> <?php ecco(!$data->text2()->isEmpty() && $data->text3()->isEmpty(), 'six') ?> <?php ecco(!$data->text3()->isEmpty(), 'four') ?> column">
          <tr>
            <td class="text-pad text-center">
              <a href="<?= $data->url1() ?>"><p><?= $data->text1() ?></p></a>
            </td>
          </tr>
        </table>
    </td>
    <?php if (!$data->text2()->isEmpty()): ?>
      <td class="wrapper <?php ecco(!$data->text2()->isEmpty() && $data->text3()->isEmpty(), 'last') ?>">
          <table class="<?php ecco(!$data->text2()->isEmpty() && $data->text3()->isEmpty(), 'six') ?> <?php ecco(!$data->text3()->isEmpty(), 'four') ?> column">
            <tr>
              <td class="text-pad text-center">
                <a href="<?= $data->url2() ?>"><p><?= $data->text2() ?></p></a>
              </td>
            </tr>
          </table>
      </td>
    <?php endif; ?>
    <?php if (!$data->text3()->isEmpty()): ?>
      <td class="wrapper last">
          <table class="four column">
            <tr>
              <td class="text-pad text-center">
                <a href="<?= $data->url3() ?>"><p><?= $data->text3() ?></p></a>
              </td>
            </tr>
          </table>
      </td>
    <?php endif; ?>

    </tr>
</table>
