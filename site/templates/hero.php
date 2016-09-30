<?php snippet('email-header') ?>

  <table class="container">
    <tr>
      <td class="center" align="center">

        <center>
          <table class="row">
            <tr>
              <td class="wrapper wrapper-flush-t-padding last">

                <table class="twelve columns">
                  <tr>
                    <td class="center">

                      <!-- Main StrXur Hero Article -->
                      <a href="<?php echo $page->heroLink() ?>">
                        <img src="<?php echo $page->heroImg() ?>" width="580" alt="<?php echo $page->heroAlt() ?>">
                      </a>
                    </td>
                  </tr>
                </table>

              </td>
            </tr>

          </table>
          <table class="row">
            <tr>
              <td class="wrapper last">

                <table class="twelve columns">
                  <tr>
                    <td class="text-pad">

                      <?php echo $page->heroCopy()->kt() ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table class="row">
            <tr>
              <td class="wrapper last offset-by-three">

                <table class="six columns">
                  <tr>
                    <td class="text-pad">
                      
                      <table class="tiny-button">
                        <tr>
                          <td>
                            <a href="<?php echo $page->ctaUrl() ?>" target="_blank"><?php echo $page->cta()->html() ?></a>
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
        <?php snippet('email-footer') ?>
        <?php snippet('email-inliner') ?>