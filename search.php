<?php get_header(); ?>

<main class="home-main pt-md-130">
    <div class="container p-a-0 mb-xs-80 mt-xs--90">
    <?php 


		while(have_posts()): the_post();
?>

<a href="<?php the_permalink( ); ?>" class="col-xs-12 mb-xs-30" id="single-post-search-<?php the_ID(); ?>">
    <article class="bgc-white">
        <div class="img-header-biblioteca">
            <?php
                if(get_the_post_thumbnail($value->ID)) 
                    {
                            echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail');
                    }
                    else 
                    {
                ?>
                <img src="http://via.placeholder.com/650x400" alt="" />
                <?php } ?>

        </div>
        <div class="box-infos-search">
                <?= get_cat_name( $cat_id ) ?>
                <h1 class="c-grey-dark">
                    <strong><?php the_title(); ?></strong></h1>
                <!-- <?php the_excerpt() ?> -->
        </div>
    </article>
</a>

<?php

endwhile;
        ?>

    </div>
</main>

<?php get_footer();?>