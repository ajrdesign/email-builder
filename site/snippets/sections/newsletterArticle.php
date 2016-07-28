<table class="row">
  <tr>
    <td class="wrapper">

      <table class="six columns">
        <tr>
          <td class="left-text-pad">

            <a href="<?= $data->url() ?>">
              <img width="260" src="<?= $data->picture() ?>" alt="<?= $data->headline() ?>" class="hide-for-small">
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

            <span style="font-size:15px;"><a href="<?= $data->url() ?>"><?= $data->headline() ?> </a></span>
            <?= $data->text()->kt() ?> 

          </td>
        </tr>
      </table>

    </td>
  </tr>
</table>