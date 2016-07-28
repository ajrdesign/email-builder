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
              	<?php foreach($page->builder()->toStructure() as $section): ?>
				  <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
				<?php endforeach ?>
                

                <!-- 2nd StrXur Article -->
                <table class="row">
                  <tr>
                    <td class="wrapper">

                      <table class="six columns">
                        <tr>
                          <td class="left-text-pad">

                            <a href="http://strxur.com/sharks-water-no-predictions-part-2/?src=2123">
                              <img width="260" height="180" src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/07.2016/Shark_260x180.jpg" alt="BREAKGROUND Magazine" class="hide-for-small">
                            </a>

                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                    <td class="wrapper last">

                      <table class="six columns last">
                        <tr>
                          <td class="right-text-pad">

                            <span class="hide-for-small"></span>

                            <span style="font-size:15px;"><a href="http://strxur.com/sharks-water-no-predictions-part-2/?src=2123">With All These Sharks in the Water—No Predictions Here: Part 2</a></span>
                            <p style="color:#a7a9ac;">Rather than fighting to control the proliferation of apps, perhaps we should be training our eyes to look for signs of long-term viability among all the fins in the water.</p>

                          </td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>


<?php snippet('email-footer') ?>
<?php snippet('email-inliner') ?>