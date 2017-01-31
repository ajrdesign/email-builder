
<table class="row">
            <tr>
              <td class="wrapper offset-by-three last">

                <table class="six columns ">
                  <tr>
                    <td class="text-pad center">
                      <table class="medium-button <?= ($data->style() == 'true') ? 'outline' : '' ?>" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td >
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center"><a target="_blank" href="<?= $data->url() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style=""><?= $data->text() ?></a></td>
                              </tr>
                            </table>
                          </td>
                        </tr>
                      </table>
                      <a href="<?= $data->urlSecondary() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank"><small><?= $data->textSecondary() ?></small></a>

                    </td>
                    <td class="expander"></td>
                  </tr>
                </table>

              </td>
              
            </tr>
          </table>