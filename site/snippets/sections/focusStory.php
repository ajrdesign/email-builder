
<!-- Start of Focus Story Hero Section -->

  <!-- Spacer -->

  <table class="spacer">
    <tbody>
      <tr>
        <td height="50px" style="font-size:50px;line-height:50px;">&#xA0;</td>
      </tr>
    </tbody>
  </table>

  <!-- End of Spacer -->

  <table class="row" id="focus-story">
  	<tr>
  		<td class="wrapper last">
  			<table class="large-12 columns">
  				<tr>
  					<td class="center">
  						<h1 class="focus"><?= $data->headline()->text() ?></h1>
  					</td>
  				</tr>
  				<tr>
  					<td class="center">
  						<h3 class="focus"><?= $data->subheadline()->text() ?></h3>
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
        <td height="25px" style="font-size:25px;line-height:25px;">&#xA0;</td>
      </tr>
    </tbody>
  </table>

  <!-- End of Spacer -->

  <table class="row-override">
    <tr>
      <td>
        <table class="large-12 columns">
          <tr>
            <td class="center">
              <a target="_blank" href="<?php echo $data->focusImageLink() ?>">
                <img src="<?php echo $data->focusImage() ?>" width="600" alt="<?php echo $data->focusImageAlt() ?>">
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
        <td height="25px" style="font-size:25px;line-height:25px;">&#xA0;</td>
      </tr>
    </tbody>
  </table>

  <!-- End of Spacer -->

  <!-- Focus main content -->

  <table class="row focus-content">
    <tr>
      <td>
        <table class="large-12 columns">
          <tr>
            <td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
              <p><?= $data->focusContent()->kt() ?></p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <!-- End of main content -->

  <!-- Spacer -->

  <table class="spacer">
    <tbody>
      <tr>
        <td height="50px" style="font-size:50px;line-height:50px;">&#xA0;</td>
      </tr>
    </tbody>
  </table>

  <!-- End of Spacer -->


  <!-- Focused story CTA Button -->

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
            <tr>
              <td>
                <a href="<?= $data->extraUrl() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style="color: #cacaca;"><small><?= $data->extraText() ?></small></a>
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
        <td height="100px" style="font-size:100px;line-height:100px;">&#xA0;</td>
      </tr>
    </tbody>
  </table>

  <!-- End of Spacer -->


<!-- End of Focused Story Hero Section -->
