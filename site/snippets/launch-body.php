<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
          <table class="row responsive-hero-container">
            <tr>
              <td class="wrapper wrapper-flush-t-padding last">

                <table class="twelve columns">
                  <tr>
                    <td>

                      <a target="_blank" href="<?php echo $page->heroLink() ?>">
                        <img class="responsive-hero" src="<?php echo $page->heroImg() ?>" width="580" alt="<?php echo $page->heroAlt() ?>">
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
                    <td class="text-pad <?= ($page->Contentalign() == 'true') ? 'center' : 'left' ?>">
                      <?php if(!$page->subheading()->empty()): ?>
                        <h2><?php echo $page->subheading() ?></h2>
                      <?php endif ?>
                      
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
          <?php foreach($page->builder()->toStructure() as $section): ?>
            <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
          <?php endforeach ?>
          