<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
          <table class="row responsive-hero-container">
            <tr>
              <td class="wrapper wrapper-flush-t-padding last">

                <table class="twelve columns">
                  <tr>
                    <td class="center">

                      <a target="_blank" href="<?php echo $page->heroLink() ?>">
                        <img class="responsive-hero" src="<?php echo $page->heroImg() ?>" width="580" alt="<?php echo $page->heroAlt() ?>">
                      </a>
                    </td>
                  </tr>
                </table>

              </td>
            </tr>

          </table>
          <table class="row rallyday-bg">
            <tr>
              <td class="wrapper last">

                <table class="twelve columns">
                  <tr>
                    <td class="text-pad text-rallyday text-center">
                      <?php echo $page->copyOne()->kt() ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table class="row rallyday-bg-dark">
            <tr>
              <td class="wrapper last">

                <table class="twelve columns rally-border">
                  <tr>
                    <td class="text-pad text-white text-center">
                      <?php echo $page->copyTwo()->kt() ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table class="row rallyday-bg">
            <tr>
              <td class="wrapper last">

                <table class="twelve columns">
                  <tr>
                    <td class="text-pad text-rallyday text-center">
                      <?php echo $page->copyThree()->kt() ?>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <?php if (!$page->heroCtaImg()->empty()): ?>
            <table class="row responsive-hero-pad">
              <tr>
                <td class="wrapper wrapper-flush-t-padding last">

                  <table class="twelve columns">
                    <tr>
                      <td class="center">

                        <a target="_blank" href="<?php echo $page->heroCtaLink() ?>">
                          <img class="responsive-hero" src="<?php echo $page->heroCtaImg() ?>" width="580" alt="<?php echo $page->heroCtaAlt() ?>">
                        </a>
                      </td>
                    </tr>
                  </table>

                </td>
              </tr>

            </table>
            <?php else: ?>
              <table class="row rallyday-bg">
                  <tr>
                    <td class="wrapper offset-by-three last">

                      <table class="six columns ">
                        <tr>
                          <td class="text-pad">

                            <table class="medium-button button-blue" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td >
                                  <table border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                      <td align="center"><a target="_blank" href="<?php echo $page->heroCtaLink() ?>" target="_blank" style=""><?php echo $page->heroCtaAlt() ?></a></td>
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
          <?php endif; ?>
