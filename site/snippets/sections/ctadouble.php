<table class="row">
    <tr>
      <td class="wrapper offset-by-one ">

        <table class="four columns ">
          <tr>
            <td class="text-pad center">
              <p class="center"><?= $data->copyLeft() ?></p>
              <table class="medium-button button-grayDarker" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td >
                    <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center"><a target="_blank" href="<?= $data->urlLeft() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style=""><?= $data->textLeft() ?></a></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              

            </td>
            <td class="expander"></td>
          </tr>
        </table>

      </td>
      <td class="wrapper offset-by-two last">

        <table class="four columns ">
          <tr>
            <td class="text-pad center">
              <p class="center"><?= $data->copyRight() ?></p>
              <table class="medium-button button-grayDarker" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td >
                    <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center"><a target="_blank" href="<?= $data->urlRight() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style=""><?= $data->textRight() ?></a></td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              

            </td>
            <td class="expander"></td>
          </tr>
        </table>

      </td>
      
    </tr>
  </table>