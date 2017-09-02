<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Url;


$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="content">

    <section id="subheader" data-speed="8" data-type="background" style="background-image: url(<?=Yii::$app->params['site_url']?>images/files/subheader-6.jpg); background-position: 50% 0px;">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <h2>Contact</h2>

                    <ul class="crumb"><li><a href="<?=Url::to(['/site/index']);?>">Home</a></li><li class="sep">/</li><li>Contact</li></ul>
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


    <div class="container">


        <div class="nav_tabs_admin"></div>




    </div>

    <div class="row">


        <div class="col-md-12">


            <div class="region region-content">



                <div id="block-system-main" class="block block-system">









                    <div class="content">

                        <form class="user-info-from-cookie contact-form" action="/drupal/archi_dark/contact" method="post" id="contact-site-form" accept-charset="UTF-8"><div>

                                <div id="contact_form">

                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47018.744629556226!2d30.548546811688215!3d50.39400350220462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x63c3386d346e5a5c!2z0JPQvtC70L7RgdC10LXQstGB0LrQuNC5INC_0LDRgNC6!5e0!3m2!1sru!2sru!4v1503217764954" width="100%" height="700" frameborder="0" style="border:0" allowfullscreen></iframe>

                                    <section id="section-content">

                                        <div class="container">

                                            <div class="row">

                                                <div class="col-md-8">

                                                    <h3>Send Us Message</h3>



                                                    <div class="row">

                                                        <div class="col-md-4">

                                                            <div class="form-item form-type-textfield form-item-name">
                                                                <label for="edit-name">Your name <span class="form-required" title="This field is required.">*</span></label>
                                                                <input class="form-control form-text required" type="text" id="edit-name" name="name" value="" size="60" maxlength="255">
                                                            </div>

                                                            <div class="form-item form-type-textfield form-item-mail">
                                                                <label for="edit-mail">Your e-mail address <span class="form-required" title="This field is required.">*</span></label>
                                                                <input class="form-control form-text required" type="text" id="edit-mail" name="mail" value="" size="60" maxlength="255">
                                                            </div>

                                                        </div>

                                                        <div class="col-md-8">

                                                            <div class="form-item form-type-textfield form-item-subject">
                                                                <label for="edit-subject">Subject <span class="form-required" title="This field is required.">*</span></label>
                                                                <input class="form-control form-text required" type="text" id="edit-subject" name="subject" value="" size="60" maxlength="255">
                                                            </div>


                                                            <div class="form-item form-type-textarea form-item-message">
                                                                <label for="edit-message">Message <span class="form-required" title="This field is required.">*</span></label>
                                                                <div class="form-textarea-wrapper"><textarea id="edit-message" name="message" cols="60" rows="5" class="form-textarea required" style="margin: 0px -1.9px 20px 0px; width: 401px; height: 165px;"></textarea></div>
                                                            </div>


                                                        </div>

                                                        <div class="col-md-12">

                                                            <button class="btn btn-line">Send message</button>

                                                        </div>

                                                    </div>

                                                    <div class="js-hide"><input type="hidden" name="form_build_id" value="form-FVS7XImklGl3TEDzQOeSrRedZgnWaXoRfjMSDbKWDJQ">
                                                        <input type="hidden" name="form_id" value="contact_site_form">
                                                        <div class="form-actions form-wrapper" id="edit-actions"><input class="btn btn-primary form-submit" type="submit" id="edit-submit" name="op" value="Send message"></div></div>

                                                </div>

                                                <div id="sidebar" class="col-md-4">

                                                    <div class="widget widget_text">
                                                        <h3>Contact Info</h3>
                                                        <address>
                                                            <span>100 Mainstreet Center, Sydney</span>
                                                            <span><strong>Phone:</strong>(208) 333 9296</span>
                                                            <span><strong>Fax:</strong>(208) 333 9298</span>
                                                            <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                                                            <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                                                            <span><strong>Open</strong>Sunday - Friday 08:00 - 18:00</span>
                                                        </address>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </section>

                                </div></div></form>
                    </div>


                </div>

            </div>


        </div>



    </div>




