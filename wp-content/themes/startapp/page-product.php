<?php get_header(); ?>

    <article class="page">

        <section class="fw-section padding-bottom-2x padding-top-2x" data-aos="fade-up">
            <div class="container">
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
                    <?php foreach (get_posts(array('category_name' => 'product', 'posts_per_page' => -1, 'order' => 'asc')) as $product): ?>
                    <div class="grid-item <?=implode(' ', array_map(function ($catgeory) { return 'product-' . $catgeory->slug; }, array_filter(get_the_category($product->ID), function ($category) { return $category->slug !== 'product'; })))?>">
                        <article class="portfolio-tile portfolio-simple">
                            <a class="portfolio-thumb" target="_blank" <?=get_the_subtitle($product->ID) ? 'href="' . get_the_subtitle($product->ID) . '"' : ''?>>
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