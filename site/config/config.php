<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', '');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

// Temporary fix for Panel
c::set('panel.install', true);

// Styling the Panel
c::set('panel.stylesheet', 'assets/css/addon.css');

//CDN Configuration
c::set('cdn.assets', 'http://downloads.bluebeam.com');
c::set('cdn.content', 'http://downloads.bluebeam.com');
c::set('cdn.thumbs', false);

//CDN cache buster
c::set('cachebuster', true);
