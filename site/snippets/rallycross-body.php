<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
<!-- Heading Text Block -->
          <?php if(!$page->heading()->empty()): ?>
            <table class="row">
              <tr>
                <td class="wrapper last">
                    <table class="twelve columns">
                      <tr>
                        <td class="text-pad">
                            <h2><?php echo $page->heading() ?></h2>
                        </td>
                      </tr>
                    </table>
                </td>
              </tr>
            </table>
          <?php endif ?>
<!-- Hero Image Block -->
          <?php if(!$page->heroImg()->empty()): ?>
          <table class="row">
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
          <?php endif ?>
<!-- Content Copy Block -->
          <table class="row">
            <tr>
              <td class="wrapper last">
                <table class="twelve columns">
                  <tr>
                    <td class="text-pad">
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
<!-- Loop for the Articles -->
              <?php foreach($page->article()->toStructure() as $article): ?>
              
              
              <table class="row">
                <tr>
                  <td class="wrapper last">
                    <table class="twelve columns last">
                      <tr>
                        <td class="text-pad">
                          <!-- Option for using a divider image or just a standard divider -->
                          <?php if(!$article->imgDivider()->empty()): ?>
                          <img width="560" src="<?php echo $article->imgDivider() ?>" alt="<?php echo $article->imgDividerAlt() ?>">
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

                          <table cellpadding="0" cellspacing="0" border="0">
                            <tr>
                              <td class="article-image-container">
                                <a target="_blank" href="<?php echo $article->url() ?>">
                                  <img width="560" src="<?php echo $article->picture() ?>" alt="<?php echo $article->headline() ?>">
                                </a>
                              </td>
                            </tr>
                          </table>
                          <h3><?php echo $article->headline() ?></h3>
                          <?php echo $article->text->kt() ?>
                          <?php if(!$article->cta()->empty()): ?>
                          <a target="_blank" href="<?php echo $article->url() ?>"><img src="https://downloads.bluebeam.com/images/2016/VARiety/16-10/blue-arrow-v2.png" alt=">">&nbsp;<?php echo $article->cta() ?></a>
                          <?php endif ?>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            <?php endforeach ?>
            <?php if($page->ctaToggle() == '1' ): ?>
              <table class="row">
                <tr>
                  <td class="wrapper last offset-by-three">

                    <table class="six columns">
                      <tr>
                        <td class="text-pad">
                          <table class="spacer">
                            <tbody>
                              <tr>
                                <td height="5px" style="font-size:5px;line-height:5px;">&#xA0;</td>
                              </tr>
                            </tbody>
                          </table>
                          <table class="medium-button" align="center" width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td >
                                <table border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td align="center"><a target="_blank" href="<?php echo $page->ctaUrl() ?>" target="_blank" style=""><?php echo $page->ctaButton() ?></a></td>
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
              <?php endif ?>