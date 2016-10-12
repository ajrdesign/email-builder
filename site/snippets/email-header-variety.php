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
<custom name="opencounter" type="tracking">
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
                  <td class="wrapper">

                    <table class="eight columns">
                      <tr>
                        <td class="twelve sub-columns left-text-pad">
                          <a href="<?php echo $page->parent()->logoUrl() ?>" target="_blank"><img src="<?php echo $page->parent()->logo() ?>" alt="<?php echo $page->parent()->logoAlt() ?>"></a>
                        </td>
                        
                        <td class="expander"></td>
                      </tr>
                    </table>
                  </td>
                  <td class="wrapper last">

                    <table class="four columns">
                      <tr>
                        <td class="right-text-pad">
                          <h5 class="edition-date"><?php echo $page->month() ?></h5>
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