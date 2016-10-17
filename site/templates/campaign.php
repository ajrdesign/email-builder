<?php snippet('email-header') ?>

  <table class="container">
    <tr>
      <td class="center" align="center">

        <center>
          <table class="row responsive-campaign-container">
            <tr>
              <td class="wrapper wrapper-flush-t-padding last">

                <table class="twelve columns">
                  <tr>
                    <td class="center">

                      <a href="<?php echo $page->heroLink() ?>">
                        <img class="responsive-hero" src="<?php echo $page->heroImg() ?>" width="580" alt="<?php echo $page->heroAlt() ?>">
                      </a>
                    </td>
                  </tr>
                </table>

              </td>
            </tr>

          </table>
          
        <?php snippet('email-footer') ?>
        <?php snippet('email-inliner') ?>