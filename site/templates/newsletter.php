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
                          <a href="<?php echo $page->parent()->logoUrl() ?>" target="_blank"><img src="<?php echo $page->parent()->logo() ?>" alt="<?php echo $page->parent()->logoAlt() ?>"></a>
                        </td>
                        <td class="six sub-columns right-text-pad hide-for-small last" style="text-align:right; padding-right:15px;">
                        	<?php if($page->parent()->facebook()->isTrue()): ?>
	                        	<a href="<?php echo $page->parent()->facebookUrl() ?>" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-facebook.png" alt="Facebook"></a>
                        	<?php endif ?>
                        	<?php if($page->parent()->linkedin()->isTrue()): ?>
	                        	<a href="<?php echo $page->parent()->linkedinUrl() ?>" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-linkedin.png" alt="LinkedIn"></a>
                        	<?php endif ?>
                        	<?php if($page->parent()->twitter()->isTrue()): ?>
	                        	<a href="<?php echo $page->parent()->twitterUrl() ?>" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-twitter.png" alt="Twitter"></a>
                        	<?php endif ?>
                        	<?php if($page->parent()->youtube()->isTrue()): ?>
	                        	<a href="<?php echo $page->parent()->youtubeUrl() ?>" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-youtube.png" alt="YouTube"></a>
                        	<?php endif ?>
                        	<?php if($page->parent()->instagram()->isTrue()): ?>
	                        	<a href="<?php echo $page->parent()->instagramUrl() ?>" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-instagram.png" alt="Instagram"></a>
                        	<?php endif ?>
                        	<?php if($page->parent()->rss()->isTrue()): ?>
	                        	<a href="<?php echo $page->parent()->rssUrl() ?>" target="_blank"><img src="https://downloads.bluebeam.com/images/2016/Editorial_Features_Newsletter/template-images/logo-header-rss.png" alt="RSS"></a>
                        	<?php endif ?>
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
				<table class="row">
				  <tr>
				    <td class="wrapper last">

				      <table class="twelve columns">
				        <tr>
				          <td class="text-pad">

				            <?php echo $page->heroCopy()->kt() ?>
				          </td>
				        </tr>
				      </table>
				    </td>
				  </tr>
				</table>
              	<?php //foreach($page->builder()->toStructure() as $section): ?>
        				  <?php //snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
        				<?php //endforeach ?>
                <?php foreach($page->article()->toStructure() as $article): ?>
                <table class="row">
                  <tr>
                    <td class="wrapper">

                      <table class="six columns">
                        <tr>
                          <td class="left-text-pad">

                            <a href="<?php echo $article->url() ?>">
                              <img width="260" src="<?php echo $article->picture() ?>" alt="<?php echo $article->headline() ?>" class="hide-for-small">
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

                            <h5 style="font-size:15px;"><a href="<?php echo $article->url() ?>"><?php echo $article->headline() ?> </a></h5>
                            <?php echo $article->text() ?>

                          </td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>
                <?php endforeach ?>
                          


<?php snippet('email-footer') ?>
<?php snippet('email-inliner') ?>