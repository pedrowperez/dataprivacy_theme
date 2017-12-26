<?php get_header(); ?>
<?php    $class_color = array( 2 => "c-roxocat" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");
?>
<main class="home-main pt-md-130">
    
    <div class="container">
        
        <div class="row">
            <?php 
        $i = 1;
        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        ?>
        
            <article class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-4 post">
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
                        <p class="<?= $class_color[$categoria->term_id] ?> upper">
                            <?= $categoria->name ?> </p> 
                    </div>
                   <div class="content-title  p-a-50">
                        <h3>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <?= max_title_length(get_the_title() , 75); ?>
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
            </article>

            <?= $i % 3 == 0 ? '<div class="col-xs-12 visible-md visible-lg"></div>' : "" ?>

                <?php $i++; endwhile; else: ?>
                 <div class="row">
            <div class="col-xs-10 col-xs-offset-1 col-lg-12 pt-xs-30">
        <p class="pb-sm-50">    
            <?php _e('Desculpe, nao foi localizado nenhum post.'); ?></p>        
        
        </div>
    </div>
                <?php endif; ?>

        </div>
    </div>
</main>
<?php include('card.php'); ?>
<?php get_footer();?>