<table class="row newsletter">
  <tr>

    <td class="wrapper last">

      <table class="twelve columns last">
        <tr>
          <td class="text-pad">
            <!-- Option for using a divider image or just a standard divider -->
            <?php if(!$data->imgDivider()->empty()): ?>
            <img width="560" src="<?php echo $data->imgDivider() ?>" alt="<?php echo $data->imgDividerAlt() ?>">
            <table class="spacer">
              <tbody>
                <tr>
                  <td height="5px" style="font-size:5px;line-height:5px;">&#xA0;</td>
                </tr>
              </tbody>
            </table>
            <?php else : ?>
            <hr class="article-divider">
            <?php endif ?>

            <h4><a target="_blank" href="<?php echo $data->url() ?>"><?php echo $data->headline() ?> </a></h4>
            <table cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td class="article-image-container">
                  <a target="_blank" href="<?php echo $data->url() ?>">
                    <img width="560" src="<?php echo $data->picture() ?>" alt="<?php echo $data->headline() ?>">
                  </a>
                </td>
              </tr>
            </table>
            <?php echo $data->text->kt() ?>
            <?php if(!$data->cta()->empty()): ?>
            <a target="_blank" href="<?php echo $data->url() ?>"><img src="https://downloads.bluebeam.com/images/2016/VARiety/16-10/blue-arrow-v2.png" alt=">">&nbsp;<?php echo $data->cta() ?></a>
            <?php endif ?>

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>
