<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <?php $home = get_template_directory_uri(); ?>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title> Data Privacy </title>
        <!-- <link rel="stylesheet" href="<?= $home; ?>/normalize.css"> -->
        <link rel="stylesheet" href="<?= $home; ?>/assets/css/bootstrap.css">
        <link rel="stylesheet" href="<?= $home; ?>/assets/css/main.css">
        <!-- <link rel="stylesheet" href="<?= $home; ?>/vendor/font-awesome/css/font-awesome.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">


        <?php wp_head(); ?>
    </head>

    <body>
        <nav id="mainNav" class="navbar navbar-default navbar-blue  pt-sm-10 pb-sm-5">
            <div class="container-fluid p-a-0">
                <div class="navbar-left">

                    <a class="navbar-brand m-l" href="<?= get_home_url() ?>">
                                <img src="<?= $home; ?>/assets/img/logo.svg"> </a>

                    <div class="col-xs-12 col-sm-12 hidden-sm hidden-md hidden-lg align-item teste">
                        <button class="search-button"> </button>
                        <div class="btn-nav off">
                            <span class="sr-only">Esconder </span>
                            <div class="one"></div>
                            <div class="two"></div>
                            <div class="three"></div>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-2">
                    <div class="button-acc-hidden">
                        <?php get_search_form(); ?>
                    </div>
                </div>
                <?php
                    if ( has_nav_menu( 'primary' ) ):
                    wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'container_class' => 'collapse navbar-collapse mynavbar',
                    'menu_class' => 'nav navbar-nav navbar-middle font-weight',
                    
                    ) );
                    endif;
                ?>

            </div>
            </div>
           
        </nav>
 <div class="background-overlay-blue" hidden></div>