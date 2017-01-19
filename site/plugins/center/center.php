<?php

/**
 * Center Plugin
 *
 * @author Jimmy Rittenborg <jimmy@sitemarina.com>
 * @version 1.0.0
 */

kirbytext::$pre[] = function($kirbytext, $text) {

  $text = preg_replace_callback('!\(center(…|\.{3})\)(.*?)\((…|\.{3})center\)!is', function($matches) use($kirbytext) {

    $html = kirbytext($matches[2]);

    return '<div class="' . c::get('center.class', 'text-center') . '">' . $html . '</div>';

  }, $text);

  return $text;

};