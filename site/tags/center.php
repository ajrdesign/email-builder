<?php

kirbytext::$tags['wikipedia'] = array(
  'html' => function($tag) {
    return '<a href="http://wikipedia.org/wiki/' . $tag->attr('wikipedia') . '">Wikipedia</a>';
  }
);