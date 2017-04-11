<table class="container">
    <tr>
      <td class="center" align="center">

        <center>
             <!-- Loop for the Articles -->
    <?php foreach($page->article()->toStructure() as $article): ?>
    
    
    <table class="row">
      <tr>
        
        <td class="wrapper last">

          <table class="twelve columns last">
            <tr>
              <td class="text-pad">

                <table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                    <td class="article-image-container">
                      <a target="_blank" href="<?php echo $article->url() ?>">
                        <img width="560" src="<?php echo $article->picture() ?>" alt="<?php echo $article->headline() ?>">
                      </a>
                    </td>
                  </tr>
                </table>
                <h4><a target="_blank" href="<?php echo $article->url() ?>"><?php echo $article->headline() ?> </a></h4>
                <?php echo $article->text->kt() ?>
                <?php if(!$article->cta()->empty()): ?>
                <a target="_blank" href="<?php echo $article->url() ?>"><img src="https://downloads.bluebeam.com/images/2016/VARiety/16-10/blue-arrow-v2.png" alt=">">&nbsp;<?php echo $article->cta() ?></a>
                <?php endif ?>

              </td>
            </tr>

          </table>

        </td>
      </tr>
    </table>
<hr>
    
  <?php endforeach ?>