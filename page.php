<?php get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>
    ?>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 space-header">
                </div>
            </div>
        </div>

    </header>

    <div class="container" id="pagecontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12">
                <div class="intro-text">
                    <h1 class="name-title">
                        <?php the_title(); ?>
                    </h1>
                    <p>
                        <?php the_content(); ?> </p>
                </div>
            </div>
        </div>
    </div>





    <?php
    endwhile;
?>


        <?php get_footer(); ?>
