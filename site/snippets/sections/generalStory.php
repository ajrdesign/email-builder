<!-- General Story Section -->

<?php if($page->generalStory()->generalImage()->isEmpty()): ?>

<!-- General Entry Image -->

<table class="row">
  <tr>
    <td class="wrapper wrapper-flush-t-padding last">
      <table class="twelve columns">
        <tr>
          <td class="center">
            <a target="_blank" href="<?php echo $data->generalImageLink() ?>">
              <img src="<?php echo $data->generalImage() ?>" width="600" alt="<?php echo $data->generalImageAlt() ?>">
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

<!-- End of General Entry Image -->

<?php endif ?>


<!-- General Entry Headline -->

<table class="row general-story">
  <tr>
    <td class="wrapper last">
      <table class="twelve columns">
        <tr>
          <td class="center"> 
            <a href="<?= $data->generalStory()->ctaUrl() ?>"><h3 class="focus"><?= $data->headline()->text() ?></h3></a>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<!-- End of General Entry Headline -->


<!-- General Entry Content -->

<table class="row focus-content">
  <tr>
    <td>
      <table class="twelve columns">
        <tr>
          <td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
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
      <td height="35px" style="font-size:35px;line-height:35px;">&#xA0;</td>
    </tr>
  </tbody>
</table>
<!-- End of Spacer -->


<!-- General Story CTA Button -->

<table class="row">
    <tr>
      <td class="wrapper offset-by-three last">
        <table class="six columns ">
          <tr>
            <td class="text-pad center">
              <table class="button large <?= ($data->style() == 'true') ? 'outline' : '' ?>" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td >
                    <table border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td align="center">
                          <a target="_blank" href="<?= $data->ctaUrl() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank" style=""><?= $data->ctaText() ?></a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
              <a href="<?= $data->extraUrl() ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank"><small><?= $data->extraText() ?></small></a>
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