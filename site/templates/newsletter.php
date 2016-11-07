<?php snippet('email-header-newsletter') ?>

<table class="container content newsletter">
  <tr>
    <td class="center" align="center">

      <center>
       
     <table class="row intro-content">
      <tr>
        <td class="wrapper last">

          <table class="twelve columns last">
            <tr>
              <td class="text-pad">
                <table class="spacer">
                  <tbody>
                    <tr>
                      <td height="3px" style="font-size:3px;line-height:3px;">&#xA0;</td>
                    </tr>
                  </tbody>
                </table>
                <h2><?php echo $page->heading() ?></h2>
                <?php echo $page->intro()->kt() ?>
                
              </td>
              <td class="expander"></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>     
    <?php //foreach($page->builder()->toStructure() as $section): ?>
    <?php //snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
    <?php //endforeach ?>
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

                <h4><a href="<?php echo $article->url() ?>"><?php echo $article->headline() ?> </a></h4>
                <table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td class="article-image-container">
                      <a href="<?php echo $article->url() ?>">
                        <img width="560" src="<?php echo $article->picture() ?>" alt="<?php echo $article->headline() ?>">
                      </a>
                    </td>
                  </tr>
                </table>
                <?php echo $article->text->kt() ?>
                <a href="<?php echo $article->url() ?>"><img src="https://downloads.bluebeam.com/images/2016/VARiety/16-10/blue-arrow-v2.png" alt=">">&nbsp;<?php echo $article->cta() ?></a>
                

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
                          <td align="center"><a href="<?php echo $page->ctaUrl() ?>" target="_blank" style=""><?php echo $page->ctaButton() ?></a></td>
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



  <?php snippet('email-footer') ?>
  <?php snippet('email-inliner') ?>