
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
          <table class="large-6 small-6 columns">
            <tr>
              <td class="center">
                <table class="button large radius<?= ($data->style() == 'true') ? 'outline' : '' ?>">
                  <tr>
                    <td >
                      <table>
                        <tr>
                          <td>
                            <a target="_blank" href="<?= $data->ctaUrl() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style=""><?= $data->ctaText() ?></a>
                          </td>
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
