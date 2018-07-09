
<!-- Start of CTA Button -->

  <table class="row">
      <tr>
        <td>
          <table class="large-6 small-6 columns ">
            <tr>
              <td class="text-pad center">
                <table class="button radius large <?= ($data->style() == 'true') ? 'outline' : '' ?>" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td >
                      <table border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td align="center">
                           <div>
                            <!--[if mso]>
                              <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $data->url() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" style="height:40px;v-text-anchor:middle;width:200px;" arcsize="9%" stroke="f" fillcolor="#6BBD45">
                                <w:anchorlock/>
                                <center>
                              <![endif]-->
                                  <a href="<?= $data->url() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>"
                            style="background-color:#6BBD45;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;font-weight:bold;line-height:1em;text-align:center;text-decoration:none;width:auto;padding: 16px;-webkit-text-size-adjust:none;"><?= $data->text() ?></a>
                              <!--[if mso]>
                                </center>
                              </v:roundrect>
                            <![endif]-->
                          </div>
                          </td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
  </table>

<!-- End of CTA Button -->
