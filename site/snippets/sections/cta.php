
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
                            <!--[if mso]>
                              <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $data->url() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" style="height:45px;v-text-anchor:middle;width:200px;" arcsize="0%" stroke="f" fillcolor="#8bc34a">
                                <w:anchorlock/>
                                <center>
                              <![endif]-->
                                  <a target="_blank" href="<?= $data->url() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style="color:#ffffff;"><?= $data->text() ?></a>
                              <!--[if mso]>
                                </center>
                              </v:roundrect>
                            <![endif]-->
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

