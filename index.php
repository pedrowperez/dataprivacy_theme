<?php 
    $class_color = array( 2 => "c-roxocat" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");
    //  add_filter( 'the_title', 'max_title_length');
?>

<?php get_header(); ?>
<?php include('recent-post.php'); ?>


<main class="home-main pt-xs-60">
    <div class="container">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1 site-main">
            <?php
           
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $postper = array (
                    'posts_per_page' => 6,
                    'paged' => $paged,

                );
                
                $querypostper = new WP_Query( $postper );
                $i = 1;
                if ( $querypostper->have_posts() ) : 
                    while ( $querypostper->have_posts() ) : 
                        $querypostper->the_post();
                        
            ?>
           
            <article class="col-xs-6 post">
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
                            <?= $categoria->name ?> </p> 
                    </div>

                </div>
            </article>
            <?= $i % 3 == 0 ? '<div class="col-xs-12 visible-md visible-lg"></div>' : "" ?>

                <?php $i++; endwhile; ?>
                
               
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                $paginateArgs = array(
                    // 'format'  => '?paged=%#%',
                    'current' => $paged,
                    'total'   => $querypostper->max_num_pages
                ); ?>
                <div class="navigation">
                    <?= paginate_links( $paginateArgs ); ?>
                </div>

                </div>
              
                
                <? else: ?>
                <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-12 col-md-12 col-lg-12">
                <p>
                    <?php _e('Desculpe, nao foi localizado nenhum post.'); ?>
                </p>
                </div>
                <?php endif; ?>

        </div>
    </div>
            </div>
</main>

<?php get_footer();?>
