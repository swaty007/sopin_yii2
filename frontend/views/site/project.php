<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Url;

$this->title = $name;
?>



<div class="region region-header">



    <div id="block-mod-background-page-mod-block-background" class="block block-mod-background-page">


        <div class="content">

            <section id="subheader" data-speed="8" data-type="background" style="background-image: url(<?=Yii::$app->params['site_url']?>images/files/subheader-1.jpg); background-position: 50% 0px;">

                <div class="container">

                    <div class="row">

                        <div class="col-md-12">

                            <h2>Projects</h2>

                            <ul class="crumb"><li><a href="<?=Url::to(['/site/index']);?>">Home</a></li><li class="sep">/</li><li>Projects</li></ul>
                            <!--

                            <ul class="crumb">

                                <li><a href="index.html">Home</a></li>

                                <li class="sep">/</li>

                                <li>Services</li>

                            </ul>

                            -->

                        </div>

                    </div>

                </div>

            </section>
        </div>


    </div>

</div>




    <div class="container">


        <div class="nav_tabs_admin"></div>



    </div>

    <div class="row">


        <div class="col-md-12">


            <div class="region region-content">



                <div id="block-system-main" class="block block-system">









                    <div class="content">

                        <?= $this->render('_gallery',['projects' => $projects,'categories' => $categories]) ?>

                    </div>


                </div>

            </div>

            <div class="region region-content-bottom">



                <div id="block-block-5" class="block block-block">









                    <div class="content">

                        <div id="call-to-action" class="section call-to-action bg-color dark text-center" data-speed="5" data-type="background">
                            <a href="#" class="btn btn-line-black btn-big">Get Quotation</a>
                        </div>
                    </div>


                </div>

            </div>

        </div>



    </div>



