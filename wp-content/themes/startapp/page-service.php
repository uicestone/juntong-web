<?php get_header(); ?>

    <article class="page">

        <section class="fw-section padding-bottom-2x padding-top-2x" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="block-title text-dark text-center" data-aos="fade-up">
                            <!--<small class="h4">君桐资本结合自身优势，通过专业的服务，<br>与业内许多企业和机构建立了深度合作关系，积累了丰富的人脉资源。 </small>-->
                        </h2>

                        <div class="tabs tabs-horizontal tabs-horizontal-center mobile-center" data-aos="fade-up"
                             id="tta-6c51415d">
                            <ul class="nav-tabs nav-tabs-dark text-center" role="tablist">
                                <?php foreach (get_posts(array('category_name' => 'service', 'order' => 'asc')) as $index => $service): ?>
                                <li class="<?=$index?'':'active'?>">
                                    <a data-toggle="tab" href="#service-<?=$service->post_name?>" role="tab"><?=get_the_title($service->ID)?></a>
                                </li>
                                <?php endforeach; ?>
                            </ul>

                            <div class="tab-content text-dark">
                                <?php foreach (get_posts(array('category_name' => 'service', 'order' => 'asc')) as $index => $service): ?>
                                <div class="tab-pane transition fade scale in<?=$index?'':' active'?>" id="service-<?=$service->post_name?>">
                                    <div class="row padding-top-2x">
                                        <div class="col-lg-6 col-lg-offset-1 col-md-7 col-md-offset-0 col-sm-8">
                                            <div class="text-block">
                                                <h3><?=get_the_title($service->ID)?></h3>

                                                <p>
                                                    <span class="text-gray"><?=strip_tags(get_the_excerpt($service->ID))?></span>
                                                </p>
                                            </div>
                                            <a class="btn btn-ghost btn-rounded btn-primary btn-nl waves-effect waves-light"
                                               href="<?=get_the_permalink($service->ID)?>">查看详情</a>
                                        </div>

                                        <div class="col-lg-3 col-lg-offset-1 col-sm-4 hidden-xs">
                                            <img alt="" class="single-image attachment-medium size-medium"
                                                 src="">
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </article>

<?php get_footer(); ?>