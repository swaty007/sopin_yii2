<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',

        "css/system.base.css",
        "css/system.menus.css",
        "css/system.messages.css",
        "css/system.theme.css",
        "css/comment.css",
        "css/field.css",
        "css/node.css",
        "css/search.css",
        "css/user.css",
        "css/views.css",
        "css/ckeditor.css",
        "css/ctools.css",
        "css/animate_progressive.css",
        "misc/vertical-tabs.css",
        "css/panels.css",
        "css/onecol.css",
        "css/md-slider.css",
        "images/files/md-slider-slide-home-layers.css",
        "css/md-slider-style.css",
        "fonts/font-awesome/css/font-awesome.css",
        "fonts/elegant-font/font-elegant.css",
        "fonts/et-line-font/font-et-line.css",
        "css/jpreloader.css",
        "css/bootstrap.css",
        "css/animate.css",
        "css/owl.carousel.css",
        "css/owl.theme.css",
        "css/owl.transitions.css",
        "css/plugin.css",
        "css/magnific-popup.css",
        "css/style.css",
        "css/demo.css",
        "css/bg.css",
        "css/settings.css",
        "css/rev-settings.css",
    ];
    public $js = [
          "js/jquery.min.js?v=1.9.1",
    "misc/jquery.once.js?v=1.2",
    "misc/drupal.js",
    "js/owl.carousel.min.js",
    "js/jquery.appear.js",
    "js/jquery.touchwipe.js",
        "js/jquery.countTo.js",
        "js/jquery.themepunch.plugins.min.js",
        "js/jquery.themepunch.revolution.min.js",
        "js/jquery.flexslider-min.js",
        "js/jquery.scrollto.js",
    "js/modernizr.js",
    "js/jquery-migrate-1.2.1.min.js",
    "js/jquery.easing.js",
    "js/md-slider.js",
    "js/shortcodes_frontend.js",
    "js/jpreLoader.js",
    "js/bootstrap.min.js",
    "js/jquery.isotope.min.js",
    "js/easing.js",
        "js/owl.carousel.min.js",
    "js/owl.carousel.js",
        "misc/vertical-tabs.js",
    "js/classie.js",
    "js/video.resize.js",
    "js/validation.js",
    "js/wow.min.js",
    "js/jquery.magnific-popup.min.js",
    "js/enquire.min.js",
    "js/designesia.js",
    "js/demo.js",
//        'js/jquery_ajax.js',
        'js/main.js',

    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
