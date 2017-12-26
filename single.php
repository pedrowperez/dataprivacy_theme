<?php require('custom-menu.php') ?>
<?php 

    $bg_color = array( 2 => "bgc-roxocat" , 3 => "bgc-bluecat", 4 => "bgc-orangecat", 5 => "bgc-greencat");
    $class_color = array( 2 => "c-roxocat" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");
?>

<?php

if( have_posts() ) {
    while( have_posts() ) {
        the_post();
       setPostViews(get_the_ID());
?>

    <header class="pt-xs-100 pb-xs-50 pt-sm-0 pb-sm-20">
        <div class="container pt-sm-100 pt-md-130 pb-md-30">
            <div class="row pb-xs-30 pb-md-30 pb-sm-60">
                <div class="col-sm-12 col-md-12 col-xs-10 col-sm-offset-0 col-xs-offset-1 col-md-offset-0">
                    <div class="mw800 m-a">
                        <h1 class="c-grey text-left">
                            <?php the_title(); ?>

                            <br>
                            <small>
                               <?php the_time( get_option( 'date_format' ) ); ?> | Por
    <?php the_author_posts_link() ?>
    </small> </h1>
                    </div>


                </div>
            </div>
            <div class="row pt-md-40 p-r-xs">
                <div class="meta-single hidden-xs hidden-sm">
                    <?php $categoria = get_the_category()[0]; ?>
                    <p class="<?= $bg_color[$categoria->term_id] ?> upper cat-single">
                        <?= $categoria->name ?>
                    </p>
                </div>
                <div class="col-md-12 p-a-0 overflow-h post-thumb-single">

                    <?= the_post_thumbnail( '', array( 'class' => 'img-post-single' ) ); ?>
                </div>
                <div class="meta-single hidden-md hidden-lg">
                    <?php $categoria = get_the_category()[0]; ?>
                    <p class="<?= $bg_color[$categoria->term_id] ?> upper cat-single">
                        <?= $categoria->name ?>
                    </p>
                </div>
            </div>

        </div>
    </header>

    <div class="container" id="postcontent" tabindex="-1">
        <div class="row">
            <div class="col-lg-12 box-father">
                <div class="intro-text m-a pb-xs-40 pb-sm-40 pt-sm-40 pt-md-0">
                    <p>
                        <?php the_content(); ?> </p>
                </div>
                <?php dynamic_sidebar( 'social-sidebar' ); ?>
            </div>
        </div>
    </div>


    <section id="container-comments">
        <div class="container">

            <div class="row">
                <div class="col-lg-12 col-xs-10 col-xs-offset-1 col-lg-offset-0 pt-xs-40">
                    <?php comments_template(); ?>
                </div>
            </div>

        </div>
    </section>


    <?php
    }
}
?>


        <section>
            <div class="container">
                <div class="row pb-md-70 pt-md-70 pt-xs-50">
                    <?php 
                     add_filter( 'the_title', 'max_title_length');
$args = array('posts_per_page' => 2);
$query = new WP_Query( $args );
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); 
?>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-4">
                        <div class="content-geral">
                            <div class="content-image">
                                <a href="<?php the_permalink();?>">
                                    <?php 
                  if(get_the_post_thumbnail($value->ID)) 
                  {
                        echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail', array( 'class' => 'featured-image-thumb' ));
                  }
                  else 
                  {
            ?>
                                     <img src="http://via.placeholder.com/650x400" alt="" />
                                    <?php } ?>
                                </a>
                            </div>
                            <div class="content-meta">
                                <?php $categoria = get_the_category()[0]; ?>
                                <p class="<?= $class_color[$categoria->term_id] ?>">
                                    <?= $categoria->name ?>
                                </p>
                            </div>
                            <div class="content-title">
                                <h3>
                                   <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                             <?= max_title_length(get_the_title() , 70); ?>
                                     </a>
                                </h3>
                                  <?php the_excerpt(); ?> 
                                    <p class="recent-post-le"> <a href="<?php the_permalink(); ?>">
                                        Leia mais </a> </p>
                            </div>
                            <div class="content-data">
                                <small>
                            <?php the_time( get_option( 'date_format' ) ); ?> | Por
                            <?php the_author_posts_link() ?>
                        </small>
                            </div>

                        </div>
                    </div>
                    <?php endwhile; ?>




                    <?php else: ?>
                    <p>
                        <?php _e('Desculpe, nao foi localizado nenhum post.'); ?>
                    </p>
                    <?php endif; ?>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-4 hidden-xs hidden-sm">
                        <div class="content-geral">
                            <?php include('post-view.php'); ?>
                        </div>
                    </div>
                    <div class="col-xs-12 visible-md visible-lg"></div>
                </div>
            </div>
        </section>




        <?php get_footer(); ?>
