
<!-- General Story Section -->

<?php if($page->generalStory()->generalImage()->isEmpty()): ?>

  <!-- General Entry Image -->

  <table class="row-override">
    <tr>
      <td>
        <table>
          <tr>
            <td class="center">
              <a target="_blank" href="<?php echo $data->generalImageLink() ?>">
                <img src="<?php echo $data->generalImage() ?>" width="600px" alt="<?php echo $data->generalImageAlt() ?>">
              </a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

    <!-- Spacer -->
    <table class="spacer">
      <tbody>
        <tr>
          <td height="30px" style="font-size:30px;line-height:30px;">&#xA0;</td>
        </tr>
      </tbody>
    </table>
    <!-- End of Spacer -->

  <!-- End of General Entry Image -->

<?php endif ?>


  <!-- General Entry Headline -->

  <table class="row">
    <tr>
      <td>
        <table>
          <tr>
            <td class="center"> 
              <a href="<?= $data->generalStory()->ctaUrl() ?>"><h2><?= $data->headline()->text() ?></h2></a>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
  <!-- End of General Entry Headline -->


  <!-- General Entry Content -->

  <table class="row">
    <tr>
      <td>
        <table>
          <tr>
            <td class="<?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
              <p><?= $data->generalContent()->kt() ?></p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <!-- End of General Entry Content -->


  <!-- Spacer -->
  <table class="spacer">
    <tbody>
      <tr>
        <td height="25px" style="font-size:25px;line-height:25px;">&#xA0;</td>
      </tr>
    </tbody>
  </table>
  <!-- End of Spacer -->


  <!-- General Story CTA Button -->
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
                              <v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="<?= $data->ctaUrl() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" style="height:40px;v-text-anchor:middle;width:200px;" arcsize="9%" stroke="f" fillcolor="#6BBD45">
                                <w:anchorlock/>
                                <center>
                              <![endif]-->
                                  <a href="<?= $data->ctaUrl() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>"
                            style="background-color:#6BBD45;border-radius:3px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:16px;font-weight:bold;line-height:1em;text-align:center;text-decoration:none;width:auto;padding: 16px;-webkit-text-size-adjust:none;"><?= $data->ctaText() ?></a>
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

  <!-- Spacer -->
  <table class="spacer">
    <tbody>
      <tr>
        <td height="75px" style="font-size:75px;line-height:75px;">&#xA0;</td>
      </tr>
    </tbody>
  </table>
  <!-- End of Spacer -->

<!-- End of General Story Section -->
