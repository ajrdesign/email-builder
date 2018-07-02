<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<span id="email-wrapper">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $page->title() ?></title>
    <?php snippet('bluebeam-alt-css') ?>
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
<!-- Header Logo Area -->
              <table class="row">

                <tr>
                  <td>
                    <table class="spacer">
                      <tbody>
                        <tr>
                          <td height="40px" style="font-size:40px;line-height:40px;">&#xA0;</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>

                <tr>
                  <td class="last">

                    <table class="large-8 small-8 columns">
                      <tr>
                        <td class="left-text-pad" width="250px">
                          <a href="<?php echo $page->parent()->logoUrl() ?>/<?php ecco(!$page->tracking()->isEmpty(), $page->tracking()) ?>" target="_blank"><img src="<?php echo $page->parent()->logo() ?>" alt="<?php echo $page->parent()->logoAlt() ?>" ></a>
                        </td>

                        <td class="expander"></td>
                      </tr>
                    </table>

                  </td>

                </tr>

                <tr>
                  <td>
                    <table class="spacer">
                      <tbody>
                        <tr>
                          <td height="40px" style="font-size:40px;line-height:40px;">&#xA0;</td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
              </table>
<!-- End of Header Logo Area -->
              </center>

            </td>
          </tr>
        </table>
