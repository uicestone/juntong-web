<?php get_header(); ?>

    <article class="page">

        <section class="fw-section padding-top-3x" data-aos="fade-up">
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

        <section class="fw-section padding-bottom-2x padding-top-2x" data-aos="fade-up">
            <div class="container">
                <hr class="hr-solid hr-primary" style="border-top-color: ; border-top-width: 1px; opacity: 0.25;">

                <h2 class="block-title text-dark text-center padding-top-3x" data-aos="fade-up">
                    投资案例
                    <small class="h4"></small>
                </h2>

                <nav class="nav-filters portfolio-categories text-center" data-grid-id="portfolio-ebe9e769-grid"
                     id="portfolio-ebe9e769-filters">
                    <ul>
                        <li class="active">
                            <a data-filter="*" href="#">显示全部</a>
                        </li>
                        <?php foreach (get_posts(array('category_name' => 'service', 'order' => 'asc')) as $service): ?>
                        <li>
                            <a data-filter=".product-<?=$service->post_name?>" href="#"><?=get_the_title($service->ID)?></a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </nav>

                <div class="portfolio-posts masonry-grid col-6 filter-grid" data-aos="fade-up"
                     id="portfolio-ebe9e769-grid">
                    <div class="gutter-sizer">
                    </div>

                    <div class="grid-sizer">
                    </div>
                    <?php foreach (get_posts(array('category_name' => 'product', 'posts_per_page' => -1)) as $product): ?>
                    <div class="grid-item <?=implode(' ', array_map(function ($catgeory) { return 'product-' . $catgeory->slug; }, array_filter(get_the_category($product->ID), function ($category) { return $category->slug !== 'product'; })))?>">
                        <article class="portfolio-tile portfolio-simple">
                            <a class="portfolio-thumb" href="<?=get_the_permalink($product->ID)?>">
                                <?=get_the_post_thumbnail($product->ID)?>
                            </a>
                        </article>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!--<div class="text-block padding-top-2x padding-bottom-2x" data-aos="fade-up">
                    <h4 style="text-align: center;">
                        <span class="text-gray">……即将启动</span>
                    </h4>
                </div>-->

                <div class="row padding-bottom-1x" data-aos="fade-up">
                    <!--<div class="col-sm-2 col-xs-4">
                        <img alt="" class="single-image attachment-full size-full" src="<?=get_stylesheet_directory_uri()?>/assets/img/fin-client-4.png">
                    </div>-->
                </div>
            </div>
        </section>

    </article>

<?php get_footer(); ?>