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
                  <td class="wrapper last">

                    <table class="twelve columns">
                      <tr>
                        <td class="six sub-columns left-text-pad">
                          <a href="http://www.bluebeam.com" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-email-features.png" alt="Bluebeam Software, Inc."></a>
                        </td>
                        <td class="six sub-columns right-text-pad hide-for-small last" style="text-align:right; padding-right:15px;">
                          <a href="https://www.facebook.com/bluebeam" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-facebook.png" alt="Facebook"></a>
                          <a href="http://www.linkedin.com/company/bluebeam-software" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-linkedin.png" alt="LinkedIn"></a>
                          <a href="https://twitter.com/bluebeam/" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-twitter.png" alt="Twitter"></a>
                          <a href="http://www.youtube.com/bluebeampdfrevu" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-youtube.png" alt="YouTube"></a>
                          <a href="http://instagram.com/bluebeamsoftware" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-instagram.png" alt="Instagram"></a>
                          <a href="http://feeds.feedburner.com/bluebeam" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-rss.png" alt="RSS"></a>
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

        <table class="container" style="background-color:#000000;">
          <tr>
            <td class="center" align="center">

              <center>
              	<table class="row">
				  <tr>
				    <td class="wrapper last">

				      <table class="twelve columns">
				        <tr>
				          <td class="text-pad center">

				            <!-- Main StrXur Hero Article -->
				            <a href="<?php echo $page->heroLink() ?>">
				            	<img src="<?php echo $page->heroImg() ?>" width="550" alt="<?php echo $page->heroAlt() ?>">
				            </a>
				          </td>
				        </tr>
				      </table>

				    </td>
				  </tr>

				</table>
              	<?php foreach($page->builder()->toStructure() as $section): ?>
				  <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
				<?php endforeach ?>              


<?php snippet('email-footer') ?>
<?php snippet('email-inliner') ?>