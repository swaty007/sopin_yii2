
<!--overlay-->
<div class="mfp-bg mfp-ready"></div>
<div class="mfp-wrap mfp-close-btn-in mfp-align-top mfp-auto-cursor mfp-ready" id="modal_gallery"
     tabindex="-1"
     style="overflow-x: hidden; overflow-y: scroll;">
    <div class="mfp-container mfp-ajax-holder mfp-s-ready">
        <div class="mfp-content">

            <div class="region region-content">


                <div id="block-system-main" class="block block-system">


                    <div class="content">

                        <div class="container project-view" id="project-view">

                            <div class="row">

                                <div class="col-md-8 project-images">

                                    <div class="field field-name-field-media-project field-type-file field-label-hidden">
                                        <div class="field-items">
                                            <div class="field-item even">
                                                <div id="file-34" class="file file-image file-image-jpeg">

                                                    <h2 class="element-invisible"><a href="/drupal/archi_dark/file/34">p3_a.jpg</a>
                                                    </h2>
                                                    <div class="content">
                                                        <img typeof="foaf:Image" class="img-responsive"
                                                             src="http://premiumbluethemes.com/drupal/archi_dark/sites/default/files/projects/p3_a_0.jpg"
                                                             width="1024" height="678" alt="p3_a" title="p3_a"></div>
                                                </div>
                                            </div>
                                            <div class="field-item odd">
                                                <div id="file-35" class="file file-image file-image-jpeg">

                                                    <h2 class="element-invisible"><a href="/drupal/archi_dark/file/35">p3_b.jpg</a>
                                                    </h2>


                                                    <div class="content">
                                                        <img typeof="foaf:Image" class="img-responsive"
                                                             src="http://premiumbluethemes.com/drupal/archi_dark/sites/default/files/projects/p3_b_0.jpg"
                                                             width="1024" height="637" alt="p3_b" title="p3_b"></div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">

                                    <div class="project-info">

                                        <h2 id="title"></h2><!--ajax title-->


                                        <div class="details">

                                            <div class="info-text">
                                                <span class="title">Date</span>
                                                <span class="val">Jun 2016</span>
                                            </div>

                                            <div class="info-text">
                                                <span class="title">Location</span>
                                                Roma, Italia
                                            </div>


                                            <div class="info-text">
                                                <span class="title">Value</span>
                                                $25 000
                                            </div>


                                            <div class="info-text">
                                                <span class="title">Client</span>
                                                Hilton Hotel
                                            </div>

                                            <div class="info-text">
                                                <span class="title">Category</span>
                                                <span class="val" id="gallery_category"></span><!--ajax category-->
                                            </div>

                                        </div>

                                        <div class="field field-name-field-body-projects field-type-text-long field-label-above">
                                            <div class="field-label">Body Projects:&nbsp;</div>
                                            <div class="field-items">
                                                <div class="field-item even"><p></p><!--ajax text-->
                                                    <h4>Our Solutions</h4>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                                        nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                                                        sunt in culpa qui officia deserunt mollit anim id est
                                                        laborum.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>


                </div>

                <button title="CloseEsc" type="button" class="mfp-close">×</button></div>



        </div><div class="mfp-preloader">Loading...</div></div></div>
<!--overlay end-->



<div class="view view-project view-id-project view-display-id-block_1 view-dom-id-489cc195aa97ee7ddf740ea6a7628c2a">


    <div class="view-content">
        <div id="section-portfolio" class="no-top no-bottom">

            <div class="container">

                <div class="spacer-single"></div>

                <!-- portfolio filter begin -->

                <div class="row">


                    <div class="col-md-12 text-center">

                        <ul id="filters" class="wow fadeInUp animated"
                            data-wow-delay="0s"
                            style="visibility: visible; animation-delay: 0s; opacity: 500;">

                            <li>
                                <a href="http://premiumbluethemes.com/drupal/archi_dark/#"
                                   data-filter="*" class="selected">All
                                    Projects</a>
                            </li>

                            <?php foreach($categories AS $category):?>
                                <li>
                                    <a href="http://premiumbluethemes.com/drupal/archi_dark/#"
                                       data-filter=".<?= $category->category;?>"><?= $category->category;?></a>
                                </li>
                            <?php endforeach;?>


                        </ul>

                    </div>


                </div>

                <!-- portfolio filter close -->

            </div>

            <div id="gallery"
                 class="gallery full-gallery de-gallery pf_full_width pf_4_cols wow fadeInUp isotope animated"
                 data-wow-delay=".3s"
                 style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp; position: relative; overflow: hidden; height: 723px; opacity: 0;">



                <?php $i = 0;?>
                <?php $arrayLength = count($projects);?>
                    <?php foreach($projects AS $project):?>

                                        <div class="item
                                        <?= $project->category;?>
                                        <?php if ($i == 0) echo 'views-row-first' ?>
                                         views-row views-row-<?php $i++; echo $i ?>
                                        <?php  if(($i % 2) == 0){
                                            echo "views-row-even";
                                        }else{
                                            echo "views-row-odd";} ?>

                                         <?php  if($i == $arrayLength) echo 'views-row-last' ?>
                                         isotope-item">

                                            <div class="picframe">

                                                <a class="gallery_button" data-id="<?= $project->id;?>"
                                                   href="<?= $project->id;?>">

                            <span class="overlay" style="opacity: 0;">

                                <span class="pf_text">

                                    <span class="project-name"> <?= $project->title;?></span>

                                </span>

                            </span>

                                                </a>

                                                <img typeof="foaf:Image" class="img-responsive"
                                                     src="<?=Yii::$app->params['site_url'];?>images/files/pf (<?php echo $i ?>).jpg" width="700" height="466"
                                                     alt="pf_1" title="pf_1"
                                                     style="width: 100%; height: auto;">
                                            </div>


                                        </div>

                                    <?php endforeach;?>


        </div>

    </div>
</div>