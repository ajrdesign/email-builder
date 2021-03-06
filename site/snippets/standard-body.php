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
          <table class="row">
            <tr>
              <td class="wrapper last">

                <table class="twelve columns">
                  <tr>
                    <td class="text-pad">
                      <?php if(!$page->subheading()->empty()): ?>
                        <h3><?php echo $page->subheading() ?></h3>
                      <?php endif ?>
                      <?php echo $page->copy()->kt() ?>
                      
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <table class="row">
            <tr>
              <td class="wrapper offset-by-three last">

                <table class="six columns">
                  <tr>
                    <td class="text-pad">
                      <table class="medium-button" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                          <td >
                            <table border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td align="center"><a target="_blank" href="<?php echo $page->ctaUrl() ?>" target="_blank" style=""><?php echo $page->cta()->html() ?></a></td>
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