<?php

kirbytext::$tags['spacer'] = array(
  'html' => function($tag) {
    return '<table class="spacer">
  <tbody>
    <tr>
      <td height="' . $tag->attr('spacer') . 'px" style="font-size:' . $tag->attr('spacer') . 'px;line-height:' . $tag->attr('spacer') . 'px;">&#xA0;</td>
    </tr>
  </tbody>
</table>';
  }
);