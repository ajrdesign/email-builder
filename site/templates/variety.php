<?php snippet('email-header') ?>

<table class="container">
  <tr>
    <td class="center" align="center">

      <center>
       
     <table class="row">
      <tr>
        <td class="wrapper last">

          <table class="twelve columns last">
            <tr>
              <td class="text-pad">

                <h5 class="edition-date"><?php echo $page->title() ?></h5>
                <hr class="header-divider">

              </td>
              <td class="expander"></td>
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
        
        <td class="wrapper last">

          <table class="twelve columns last">
            <tr>
              <td class="text-pad">


                <h4><a href="<?php echo $article->url() ?>"><?php echo $article->headline() ?> </a></h4>
                <a href="<?php echo $article->url() ?>">
                  <img class="article-image" width="260" src="<?php echo $article->picture() ?>" alt="<?php echo $article->headline() ?>">
                </a>
                <?php echo $article->text->kt() ?>
                <a href="<?php echo $article->url() ?>"><?php echo $article->cta() ?></a>
                <hr class="article-divider">

              </td>
            </tr>
          </table>

        </td>
      </tr>
    </table>
  <?php endforeach ?>



  <?php snippet('email-footer') ?>
  <?php snippet('email-inliner') ?>