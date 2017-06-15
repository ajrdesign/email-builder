<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<span id="email-wrapper">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $page->title() ?></title>
    <?php snippet('email-css') ?>
  </head>

  <body>
<?php if($page->parent()->emailclient() == 'et'): ?>
<?php endif ?>
  <span class="preheader"><?php echo $page->preheader() ?></span>
<table class="body">
  <tr>
    <td class="center" align="center" valign="top">
      <center>

        <table class="container header">
          <tr>
            <td class="center" align="center">

              <center>
                
                  <table class="row">
                    <tr>

                      <?php if($page->language() == 'us'): ?>
                        <td class="wrapper last">
                          <table class="ten columns">
                            <tr>
                              <td class="left-text-pad">
                                <a href="<?php echo $page->logoUrl() ?>/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank"><img src="<?php echo $page->logo() ?>" alt="<?php echo $page->logoAlt() ?>"></a>
                              </td>
                            </tr>
                          </table>
                        </td>

                      <?php else: ?>
                        <td class="wrapper last">
                          <table class="eight columns">
                            <tr>
                              <td class="left-text-pad">
                                <a href="<?php echo $page->logoUrl() ?>/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank"><img src="<?php echo $page->logo() ?>" alt="<?php echo $page->logoAlt() ?>"></a>
                              </td>
                            </tr>
                          </table>
                        </td>

                      <?php endif ?>

                    </tr>
                  </table>

              </center>

            </td>
          </tr>
        </table>
