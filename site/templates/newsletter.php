<?php snippet('email-header') ?>

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