<table class="row">
  <tbody>
    <tr>
      <th class="small-12 large-12 columns first last">
        <table>
          <tr>
            <th>
              <?php if ($data->picture()->isNotEmpty()): ?>
                <img src="<?= $page->image($data->picture())->url() ?>" alt="">
              <?php endif ?>
            </th>
            <th class="expander"></th>
          </tr>
        </table>
      </th>
    </tr>
  </tbody>
</table>