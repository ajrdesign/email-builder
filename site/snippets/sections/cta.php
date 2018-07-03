
<!-- Start of CTA Button -->

  <table class="row">
      <tr>
        <td class="wrapper last">
          <table class="large-6 small-6 columns ">
            <tr>
              <td class="text-pad center">
                <table class="button radius large <?= ($data->style() == 'true') ? 'outline' : '' ?>" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td >
                      <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="center">
                            <a target="_blank" href="<?= $data->url() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style=""><?= $data->text() ?></a>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
            </tr>
          </table>
        </td>
      </tr>
  </table>

<!-- End of CTA Button -->
