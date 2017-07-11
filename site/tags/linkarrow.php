<?php

 kirbytext::$tags['linkarrow'] = array(
   'attr' => array(
     'url'
   ),
   'html' => function($tag) {
    // get attribute values
    $url = $tag->attr('url', false);

   	// generate html output
    $html  = '<a href="'. url($url) .'"><img src="https://downloads.bluebeam.com/images/2016/VARiety/16-10/blue-arrow-v2.png">&nbsp;';
    $html .= $tag->attr('linkarrow');
    $html .= '</a>';

     return $html;
   }
 );
