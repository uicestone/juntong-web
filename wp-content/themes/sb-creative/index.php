<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('sitename'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.useso.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?=get_stylesheet_directory_uri()?>/css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">君桐资本</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#about">关于我们</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">业务领域</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">项目概览</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">联系我们</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1><?php bloginfo('sitename'); ?></h1>
                <hr>
                <p><?php bloginfo('description'); ?></p>
                <a href="#about" class="btn btn-primary btn-xl page-scroll">了解更多</a>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <?php $about = get_posts('post_type=page&name=about')[0]; ?>
                    <h2 class="section-heading"><?=$about->post_title?></h2>
                    <hr class="light">
                    <?=$about->post_content?>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?=get_category_by_slug('services')->cat_name?></h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <?php $icons = array('diamond', 'paper-plane', 'newspaper-o'); ?>
            <?php foreach(get_posts('category_name=services') as $index => $service){ ?>
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-<?=$icons[$index]?> wow bounceIn text-primary"></i>
                        <h3><?=$service->post_title?></h3>
                        <p class="text-muted"></p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="no-padding" id="portfolio">
        <div class="container-fluid">
            <div class="row no-gutter">
                <?php foreach(get_posts('category_name=projects&posts_per_page=-1') as $project){ ?>
                <div class="col-lg-4 col-sm-6">
                    <a href="<?=get_the_permalink($project->ID)?>" class="portfolio-box">
                        <?=get_the_post_thumbnail($project->ID, null, array('class'=>'img-responsive'))?>
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded">
                                    
                                </div>
                                <div class="project-name">
                                    <?=$project->post_title?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="container">
            <div class="row">
                <?php $contact = get_posts('post_type=page&name=contact')[0]; $segments = explode("\n", $contact->post_content); ?>
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading"><?=$contact->post_title?></h2>
                    <hr class="primary">
                    <p><?=$segments[0]?></p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p><?=$segments[1]?></p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:<?=$segments[2]?>"><?=$segments[2]?></a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="<?=get_stylesheet_directory_uri()?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=get_stylesheet_directory_uri()?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=get_stylesheet_directory_uri()?>/js/jquery.easing.min.js"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/jquery.fittext.js"></script>
    <script src="<?=get_stylesheet_directory_uri()?>/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?=get_stylesheet_directory_uri()?>/js/creative.js"></script>

</body>

</html>
