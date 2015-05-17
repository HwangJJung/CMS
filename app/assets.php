<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/*
|--------------------------------------------------------------------------
| Application Assets
|--------------------------------------------------------------------------
|
| Here is where you can register all of the assets for an application.
| This leverages the power of lightgear/asset.
|
*/

$styles = [];
if (Config::get('theme.name') == 'default') {
    $styles[] = 'css/bootstrap.min.css';
} elseif (Config::get('theme.name') == 'legacy') {
    $styles[] = 'css/bootstrap.min.css';
    $styles[] = 'css/bootstrap-theme.min.css';
} else {
    $styles[] = 'css/bootstrap.'.Config::get('theme.name').'.min.css';
}
$styles[] = 'css/cms-main.css';
if (Config::get('laravel-debugbar::enabled')) {
    $styles[] = 'maximebf\debugbar\src\DebugBar\Resources\vendor\highlightjs\styles\github.css';
}

array_push($styles,
'css/main.css',
    'css/blue.css',
    'css/owl.carousel.css',
    'css/owl.transitions.css',
    'font/fontello.css'
    );
Asset::registerStyles([
    'css/bootstrap.min.css',
    'font/fontello.css'
], '', 'admin');


Asset::registerStyles($styles, '', 'main');

$scripts = [
    'js/cms-timeago.js',
    'js/cms-restfulizer.js',
    'js/cms-carousel.js',
    'js/cms-alerts.js',
    'js/jquery.easing.1.3.min.js' ,
    'js/jquery.form.js' ,
    'js/jquery.validate.min.js' ,
    'js/bootstrap-hover-dropdown.min.js' ,
    'js/skrollr.min.js' ,
    'js/skrollr.stylesheets.min.js' ,
    'js/waypoints.min.js' ,
    'js/waypoints-sticky.min.js' ,
    'js/owl.carousel.min.js' ,
    'js/jquery.isotope.min.js' ,
    'js/jquery.easytabs.min.js' ,
    'js/viewport-units-buggyfill.js' ,
    'js/scripts.js' ,
    'js/onscroll.js' ,
];
if (Config::get('laravel-debugbar::enabled')) {
    $scripts[] = 'maximebf\debugbar\src\DebugBar\Resources\vendor\highlightjs\highlight.pack.js';
}

Asset::registerScripts($scripts, '', 'main');

Asset::registerScripts([
    'js/cms-picker.js',
], '', 'picker');

Asset::registerScripts([
    'js/cms-comment-core.js',
    'js/cms-comment-edit.js',
    'js/cms-comment-delete.js',
    'js/cms-comment-create.js',
    'js/cms-comment-fetch.js',
    'js/cms-comment-main.js',
], '', 'comment');


Asset::registerScripts([
    'js/cms-comment-core.js',
    'js/cms-comment-edit.js',
    'js/cms-comment-delete.js',
    'js/cms-comment-create.js',
    'js/cms-comment-fetch.js',
    'js/cms-comment-main.js',
], '', 'admin');
