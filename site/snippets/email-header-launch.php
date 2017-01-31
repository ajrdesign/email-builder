<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<span id="email-wrapper">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $page->title() ?></title>
    <?php snippet('email-css-launch') ?>
  </head>

  <body>
<custom name="opencounter" type="tracking">
  <span class="preheader"><?php echo $page->preheader() ?></span>
<table class="body">
  <tr>
    <td class="center" align="center" valign="top">
      <center>
        <?php if($page->header()->isTrue()): ?>

        <table class="container header">
          <tr>
            <td class="center" align="center">

              <center>

              <table class="row">
                <tr>
                  <td class="wrapper">

                    <table class="six columns">
                      <tr>
                        <td class="left-text-pad">
                          <a href="<?php echo $page->parent()->logoUrl() ?>/<?php ecco(!$page->language()->isEmpty(), $page->language()) ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank"><img src="<?php echo $page->parent()->logo() ?>" alt="<?php echo $page->parent()->logoAlt() ?>"></a>
                        </td>
                        
                        <td class="expander"></td>
                      </tr>
                    </table>

                  </td>
                  <td class="wrapper last">

                    <table class="six columns">
                      <tr>
                        <td class="right-text-pad" style="text-align:right;">
                          <a href="<?php echo $page->parent()->logoUrl() ?>/<?php ecco(!$page->language()->isEmpty(), $page->language()) ?>?src=<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank"><img src="<?php echo $page->parent()->logo() ?>" alt="<?php echo $page->parent()->logoAlt() ?>"></a>
                        </td>
                        
                        <td class="expander"></td>
                      </tr>
                    </table>

                  </td>
                  
                </tr>
              </table>

              </center>

            </td>
          </tr>
        </table>
        
        <?php endif ?>