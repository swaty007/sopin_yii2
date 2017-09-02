<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-csstransforms3d csstransitions csstransforms">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="/frontend/web/css/colors/yellow.css" id="colors">


</head>
<body class="html front not-logged-in no-sidebars page-front-page no-bottom no-top header-solid header-dark header-simple  loaded">
<?php $this->beginBody() ?>

<div id="wrapper">

    <!-- header begin -->

    <header>

        <div class="info">

            <div class="container">

                <div class="row">

                    <div class="col-md-12">

                        <div class="region region-top-sticky">


                            <div id="block-block-9" class="block block-block">


                                <div class="content">

                                    <div class="col">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span>
                                    </div>
                                    <div class="col">Toll Free <span
                                                class="id-color"><strong>1800.899.900</strong></span></div>
                                    <!-- social icons -->
                                    <div class="col social">
                                        <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                    class="fa fa-facebook"></i></a>
                                        <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                    class="fa fa-twitter"></i></a>
                                        <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                    class="fa fa-rss"></i></a>
                                        <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                    class="fa fa-google-plus"></i></a>
                                        <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                    class="fa fa-envelope-o"></i></a>
                                    </div>
                                </div>


                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <!-- logo begin -->

                    <h1 id="logo">

                        <a href="<?=Url::to(['/site/index']);?>">

                            <img class="logo"
                                 src="<?=Yii::$app->params['site_url'];?>images/files/logo.png"
                                 alt="Archi - Premium Interior Design Joomla Template">

                        </a>

                    </h1>

                    <!-- logo close -->


                    <!-- small button begin -->

                    <span id="menu-btn"></span>

                    <!-- small button close -->


                    <div class="region region-navigation">


                        <div id="block-system-main-menu" class="block block-system block-menu">


                            <div class="content">

                                <nav>
                                    <ul id="mainmenu" class="dotted-separator">
                                        <li class="first expanded"><a
                                                    href="<?=Url::to(['/site/index']);?>" title=""
                                                    class="<?php if($_SERVER['REQUEST_URI'] == '/') echo 'active';?>">Home</a>
<!--                                            <ul class="menu">-->
<!--                                                <li class="first leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/index-sidebar"-->
<!--                                                            title="">New Side Navigation</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/landing-page-one"-->
<!--                                                            title="">Landing Page One</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/landing-page-video"-->
<!--                                                            title="">Landing Page Video</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/" title=""-->
<!--                                                            class="active">Homepage Slider</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/index-parallax"-->
<!--                                                            title="">Homepage Parallax</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/index-video"-->
<!--                                                            title="">HomePage Video</a></li>-->
<!--                                                <li class="last leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/index-onepage"-->
<!--                                                            title="">One Page Style</a></li>-->
<!--                                            </ul>-->
                                        </li>
                                        <li class="expanded"><a
                                                    href="<?=Url::to(['/site/project']);?>" title=""
                                                    class="<?php if($_SERVER['REQUEST_URI'] == '/site/project') echo 'active';?>">Projects</a>
<!--                                            <ul class="menu">-->
<!--                                                <li class="first leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/project-2-column"-->
<!--                                                            title="">Project 2 Cols</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/project-3-column"-->
<!--                                                            title="">Project 3 Cols</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/gallery"-->
<!--                                                            title="">Gallery</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/gallery-2-column"-->
<!--                                                            title="">Gallery 2 cols</a></li>-->
<!--                                                <li class="last leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/gallery-3-column"-->
<!--                                                            title="">Gallery 3 cols</a></li>-->
<!--                                            </ul>-->
                                        </li>
                                        <li class="expanded"><a
                                                    href="http://premiumbluethemes.com/drupal/archi_dark/our-services"
                                                    title=""
                                                    class="<?php if($_SERVER['REQUEST_URI'] == '/site/service') echo 'active';?>">Services</a>
<!--                                            <ul class="menu">-->
<!--                                                <li class="first leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/content/commercial-design">Commercial-->
<!--                                                        Design</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/content/hospitally-design">Hospitally-->
<!--                                                        design</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/content/office-design">Office-->
<!--                                                        Design</a></li>-->
<!--                                                <li class="last leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/content/residential-design">Residential-->
<!--                                                        Design</a></li>-->
<!--                                            </ul>-->
                                        </li>
                                        <li class="leaf"><a
                                                    href="<?=Url::to(['/site/about']);?>" title=""
                                                    class="<?php if($_SERVER['REQUEST_URI'] == '/site/about') echo 'active';?>">About
                                                Us</a>
                                        </li>
                                        <li class="leaf"><a href="http://premiumbluethemes.com/drupal/archi_dark/blog"
                                                            title=""
                                                            class="<?php if($_SERVER['REQUEST_URI'] == '/site/blog') echo 'active';?>">Blog</a></li>
<!--                                        <li class="expanded"><a-->
<!--                                                    href="http://premiumbluethemes.com/drupal/archi_dark/products" title="">Shop</a>-->
<!--                                            <ul class="menu">-->
<!--                                                <li class="first leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/checkout"-->
<!--                                                            title="">Checkout Page</a></li>-->
<!--                                                <li class="leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/cart"-->
<!--                                                            title="">Shopping Cart</a></li>-->
<!--                                                <li class="last leaf"><a-->
<!--                                                            href="http://premiumbluethemes.com/drupal/archi_dark/content/woven-single-seat-sofa"-->
<!--                                                            title="">Single Product</a></li>-->
<!--                                            </ul>-->
<!--                                        </li>-->
                                        <li class="last leaf"><a
                                                    href="<?=Url::to(['/site/contact']);?>" title=""
                                                    class="<?php if($_SERVER['REQUEST_URI'] == '/site/contact') echo 'active';?>">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>


                        </div>

                    </div>


                </div>


            </div>

        </div>

    </header>



    <div id="content" class="no-padding">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>


<footer>

    <div class="container">

        <div class="row">

            <div class="col-md-4">

                <div class="region region-footer-first">


                    <div id="block-block-1" class="block block-block">


                        <div class="content">

                            <p><img alt="" class="logo-small"
                                    src="<?=Yii::$app->params['site_url'];?>images/files/logo.png"><br>
                                We are team based on Brookylin. Our expertise on Interior Design. Sed ut
                                perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                                architecto beatae vitae dicta sunt explicabo.</p>

                        </div>


                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="widget widget_recent_post">

                    <div class="region region-footer-second">


                        <div id="block-views-blog-latest" class="block block-views">


                            <h3>Latest Blog</h3>


                            <div class="content">

                                <div class="view view-blog view-id-blog view-display-id-latest view-dom-id-35ddef6806e173cf03b5c3601b2361a8">


                                    <div class="view-content">
                                        <ul>


                                            <li class="item views-row views-row-1 views-row-odd views-row-first">


                                                    <span class="views-field views-field-title">        <span
                                                                class="field-content"><a
                                                                    href="http://premiumbluethemes.com/drupal/archi_dark/content/5-things-take-room-good-great">5 Things That Take a Room from Good to Great</a></span>  </span>
                                            </li>


                                            <li class="item views-row views-row-2 views-row-even">


                                                    <span class="views-field views-field-title">        <span
                                                                class="field-content"><a
                                                                    href="http://premiumbluethemes.com/drupal/archi_dark/content/functional-and-stylish-wall-wall-shelves">Functional and Stylish Wall-to-Wall Shelves</a></span>  </span>
                                            </li>


                                            <li class="item views-row views-row-3 views-row-odd">


                                                    <span class="views-field views-field-title">        <span
                                                                class="field-content"><a
                                                                    href="http://premiumbluethemes.com/drupal/archi_dark/content/9-unique-and-unusual-ways-display-your-tv">9 Unique and Unusual Ways to Display Your TV</a></span>  </span>
                                            </li>


                                            <li class="item views-row views-row-4 views-row-even views-row-last">


                                                    <span class="views-field views-field-title">        <span
                                                                class="field-content"><a
                                                                    href="http://premiumbluethemes.com/drupal/archi_dark/content/how-make-huge-impact-multiples">How to Make a Huge Impact With Multiples</a></span>  </span>
                                            </li>


                                        </ul>
                                    </div>


                                </div>
                            </div>


                        </div>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="region region-footer-third">


                    <div id="block-block-2" class="block block-block">


                        <h3>Contact Us</h3>


                        <div class="content">

                            <div class="widget widget-address">
                                <address>
                                    <span>100 Mainstreet Center, Sydney</span>
                                    <span><strong>Phone:</strong>(208) 333 9296</span>
                                    <span><strong>Fax:</strong>(208) 333 9298</span>
                                    <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@archi-interior.com</a></span>
                                    <span><strong>Web:</strong><a
                                                href="http://premiumbluethemes.com/drupal/archi_dark/#">http://archi-interior.com</a></span>
                                </address>
                            </div>
                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>


    <div class="subfooter">

        <div class="container">

            <div class="row">

                <div class="col-md-6">

                    <div class="region region-copyright">


                        <div id="block-block-3" class="block block-block">


                            <div class="content">

                                © Copyright 2016 - Archi by Designesia
                            </div>


                        </div>

                    </div>

                </div>

                <div class="col-md-6 text-right">

                    <div class="region region-social">


                        <div id="block-block-4" class="block block-block">


                            <div class="content">

                                <div class="social-icons">
                                    <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                class="fa fa-facebook fa-lg"></i></a>
                                    <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                class="fa fa-twitter fa-lg"></i></a>
                                    <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                class="fa fa-rss fa-lg"></i></a>
                                    <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                class="fa fa-google-plus fa-lg"></i></a>
                                    <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                class="fa fa-skype fa-lg"></i></a>
                                    <a href="http://premiumbluethemes.com/drupal/archi_dark/#"><i
                                                class="fa fa-dribbble fa-lg"></i></a>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <a href="http://premiumbluethemes.com/drupal/archi_dark/#" id="back-to-top"></a>

</footer>
<!-- Footer close -->
</div>
<div id="switcher">

    <span class="custom-close"></span>

    <span class="custom-show" style="display: none;"></span>


    <span class="sw-title">Header Style</span>

    <select name="switcher" id="de-header-style">

        <option value="solid" selected="">Solid</option>

        <option value="transparent">Transparent</option>

    </select>


    <div class="clearfix"></div>


    <span class="sw-title">Header Color</span>

    <select name="switcher" id="de-header-color">

        <option value="dark" selected="">Dark</option>

        <option value="light">Light</option>

    </select>


    <div class="clearfix"></div>


    <span class="sw-title">Header Layout</span>

    <select name="switcher" id="de-header-layout">

        <option value="simple" selected="">Simple</option>

        <option value="extended">Extended</option>

    </select>


    <div class="clearfix"></div>


    <span class="sw-title">Menu Style</span>

    <select name="switcher" id="de-menu">

        <option value="dotted-separator" selected="">Dotted Separator</option>

        <option value="line-separator">Line Separator</option>

        <option value="circle-separator">Circle Separator</option>

        <option value="square-separator">Square Separator</option>

        <option value="plus-separator">Plus Separator</option>

        <option value="strip-separator">Strip Separator</option>

        <option value="no-separator">No Separator</option>

    </select>


    <div class="clearfix"></div>


    <span class="sw-title">Color :</span>

    <ul id="de-color">

        <li class="bg1"></li>

        <li class="bg2"></li>

        <li class="bg3"></li>

        <li class="bg4"></li>

        <li class="bg5"></li>

        <li class="bg6"></li>

        <li class="bg7"></li>

        <li class="bg8"></li>

        <li class="bg9"></li>

        <li class="bg10"></li>

    </ul>

</div>
<?php $this->endBody() ?>
<script type="text/javascript">
    <!--//--><![CDATA[//><!--
    (function($) {
        $(document).ready(function() {
            effectsIn = Drupal.settings.inEffects;
            effectsOut = Drupal.settings.outEffects;
            var options_1 = Drupal.settings.md_slider_options_1;$('#md-slider-1-block').mdSlider(options_1);
        });
    })(jQuery);
    //--><!]]>
</script>
<script type="text/javascript">
    <!--//--><![CDATA[//><!--
    jQuery.extend(Drupal.settings, {"basePath":"\/drupal\/archi_dark\/","pathPrefix":"","ajaxPageState":{"theme":"archi_dark","theme_token":"Cdq5kyVVdneGgkjjLBweydXZJVykeKbQrNaG5Ox3FjI","js":{"sites\/all\/modules\/contrib\/jquery_update\/replace\/jquery\/1.9\/jquery.min.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/custom\/nd_visualshortcodes\/js\/owl.carousel.min.js":1,"sites\/all\/modules\/custom\/nd_visualshortcodes\/js\/jquery.appear.js":1,"misc\/vertical-tabs.js":1,"sites\/all\/modules\/custom\/md_slider\/js\/jquery.touchwipe.js":1,"sites\/all\/modules\/custom\/md_slider\/js\/modernizr.js":1,"sites\/all\/modules\/custom\/md_slider\/js\/jquery-migrate-1.2.1.min.js":1,"sites\/all\/modules\/custom\/md_slider\/js\/jquery.easing.js":1,"sites\/all\/modules\/custom\/md_slider\/js\/md-slider.js":1,"0":1,"sites\/all\/modules\/custom\/nd_visualshortcodes\/js\/shortcodes_frontend.js":1,"sites\/all\/themes\/archi_dark\/js\/jpreLoader.js":1,"sites\/all\/themes\/archi_dark\/js\/bootstrap.min.js":1,"sites\/all\/themes\/archi_dark\/js\/jquery.isotope.min.js":1,"sites\/all\/themes\/archi_dark\/js\/easing.js":1,"sites\/all\/themes\/archi_dark\/js\/jquery.flexslider-min.js":1,"sites\/all\/themes\/archi_dark\/js\/jquery.scrollto.js":1,"sites\/all\/themes\/archi_dark\/js\/owl.carousel.js":1,"sites\/all\/themes\/archi_dark\/js\/jquery.countTo.js":1,"sites\/all\/themes\/archi_dark\/js\/classie.js":1,"sites\/all\/themes\/archi_dark\/js\/video.resize.js":1,"sites\/all\/themes\/archi_dark\/js\/validation.js":1,"sites\/all\/themes\/archi_dark\/js\/wow.min.js":1,"sites\/all\/themes\/archi_dark\/js\/jquery.magnific-popup.min.js":1,"sites\/all\/themes\/archi_dark\/js\/enquire.min.js":1,"sites\/all\/themes\/archi_dark\/js\/designesia.js":1,"sites\/all\/themes\/archi_dark\/demo\/demo.js":1,"sites\/all\/themes\/archi_dark\/rs-plugin\/js\/jquery.themepunch.plugins.min.js":1,"sites\/all\/themes\/archi_dark\/rs-plugin\/js\/jquery.themepunch.revolution.min.js":1},"css":{"modules\/system\/system.base.css":1,"modules\/system\/system.menus.css":1,"modules\/system\/system.messages.css":1,"modules\/system\/system.theme.css":1,"modules\/comment\/comment.css":1,"modules\/field\/theme\/field.css":1,"modules\/node\/node.css":1,"modules\/search\/search.css":1,"modules\/user\/user.css":1,"sites\/all\/modules\/contrib\/views\/css\/views.css":1,"sites\/all\/modules\/contrib\/ckeditor\/css\/ckeditor.css":1,"sites\/all\/modules\/contrib\/ctools\/css\/ctools.css":1,"sites\/all\/modules\/custom\/nd_visualshortcodes\/css\/animate_progressive.css":1,"misc\/vertical-tabs.css":1,"sites\/all\/modules\/contrib\/panels\/css\/panels.css":1,"sites\/all\/modules\/contrib\/panels\/plugins\/layouts\/onecol\/onecol.css":1,"sites\/all\/modules\/custom\/md_slider\/css\/animate.css":1,"sites\/all\/modules\/custom\/md_slider\/css\/md-slider.css":1,"public:\/\/md-slider-slide-home-layers.css":1,"sites\/all\/modules\/custom\/md_slider\/css\/md-slider-style.css":1,"sites\/all\/themes\/archi_dark\/fonts\/font-awesome\/css\/font-awesome.css":1,"sites\/all\/themes\/archi_dark\/fonts\/elegant-font\/font-elegant.css":1,"sites\/all\/themes\/archi_dark\/fonts\/et-line-font\/font-et-line.css":1,"sites\/all\/themes\/archi_dark\/css\/jpreloader.css":1,"sites\/all\/themes\/archi_dark\/css\/bootstrap.css":1,"sites\/all\/themes\/archi_dark\/css\/animate.css":1,"sites\/all\/themes\/archi_dark\/css\/owl.carousel.css":1,"sites\/all\/themes\/archi_dark\/css\/owl.theme.css":1,"sites\/all\/themes\/archi_dark\/css\/owl.transitions.css":1,"sites\/all\/themes\/archi_dark\/css\/plugin.css":1,"sites\/all\/themes\/archi_dark\/css\/magnific-popup.css":1,"sites\/all\/themes\/archi_dark\/css\/style.css":1,"sites\/all\/themes\/archi_dark\/demo\/demo.css":1,"sites\/all\/themes\/archi_dark\/css\/bg.css":1,"sites\/all\/themes\/archi_dark\/rs-plugin\/css\/settings.css":1,"sites\/all\/themes\/archi_dark\/css\/rev-settings.css":1}},"mod_block_animation":{"disable_mobile":false},"pathmodule":"sites\/all\/modules\/custom\/nd_visualshortcodes","inEffects":["bounceIn","bounceInDown","bounceInUp","bounceInLeft","bounceInRight","fadeIn","fadeInUp","fadeInDown","fadeInLeft","fadeInRight","fadeInUpBig","fadeInDownBig","fadeInLeftBig","fadeInRightBig","flipInX","flipInY","foolishIn","lightSpeedIn","puffIn","rollIn","rotateIn","rotateInDownLeft","rotateInDownRight","rotateInUpLeft","rotateInUpRight","twisterInDown","twisterInUp","swap","swashIn","tinRightIn","tinLeftIn","tinUpIn","tinDownIn","vanishIn","bounceIn","bounceInDown","bounceInUp","bounceInLeft","bounceInRight","fadeIn","fadeInUp","fadeInDown","fadeInLeft","fadeInRight","fadeInUpBig","fadeInDownBig","fadeInLeftBig","fadeInRightBig","flipInX","flipInY","foolishIn","lightSpeedIn","puffIn","rollIn","rotateIn","rotateInDownLeft","rotateInDownRight","rotateInUpLeft","rotateInUpRight","twisterInDown","twisterInUp","swap","swashIn","tinRightIn","tinLeftIn","tinUpIn","tinDownIn","vanishIn"],"outEffects":["bombRightOut","bombLeftOut","bounceOut","bounceOutDown","bounceOutUp","bounceOutLeft","bounceOutRight","fadeOut","fadeOutUp","fadeOutDown","fadeOutLeft","fadeOutRight","fadeOutUpBig","fadeOutDownBig","fadeOutLeftBig","fadeOutRightBig","flipOutX","flipOutY","foolishOut","hinge","holeOut","lightSpeedOut","puffOut","rollOut","rotateOut","rotateOutDownLeft","rotateOutDownRight","rotateOutUpLeft","rotateOutUpRight","rotateDown","rotateUp","rotateLeft","rotateRight","swashOut","tinRightOut","tinLeftOut","tinUpOut","tinDownOut","vanishOut","bombRightOut","bombLeftOut","bounceOut","bounceOutDown","bounceOutUp","bounceOutLeft","bounceOutRight","fadeOut","fadeOutUp","fadeOutDown","fadeOutLeft","fadeOutRight","fadeOutUpBig","fadeOutDownBig","fadeOutLeftBig","fadeOutRightBig","flipOutX","flipOutY","foolishOut","hinge","holeOut","lightSpeedOut","puffOut","rollOut","rotateOut","rotateOutDownLeft","rotateOutDownRight","rotateOutUpLeft","rotateOutUpRight","rotateDown","rotateUp","rotateLeft","rotateRight","swashOut","tinRightOut","tinLeftOut","tinUpOut","tinDownOut","vanishOut"],"md_slider_options_1":{"fullwidth":true,"fullscreen":true,"transitionsSpeed":800,"width":"1200","height":"700","enableDrag":true,"responsive":true,"pauseOnHover":true,"loop":true,"showLoading":true,"loadingPosition":"bottom","showArrow":true,"showBullet":false,"posBullet":"2","showThumb":false,"posThumb":"1","slideShowDelay":"4000","slideShow":true,"styleBorder":"0","styleShadow":"0","videoBox":false},"path_to_theme":"\/drupal\/archi_dark\/sites\/all\/themes\/archi_dark","view_project":"popup","loader_page":true});
    //--><!]]>
</script>
</body>
</html>
<?php $this->endPage() ?>
