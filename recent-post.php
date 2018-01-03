<?php 

    $class_color = array( 2 => "c-roxocat" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");
    // add_filter( 'the_title', 'max_title_length_recent');
?>

<section id="recentPOST">
    <?php
   $the_query = new WP_Query( array(
      'posts_per_page' => 1,
   )); 
   if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) : $the_query->the_post(); 

?>
  <a class="recent-img" href="<?php the_permalink();?>">
                            <?php 
                  if(get_the_post_thumbnail($value->ID)) 
                  {
                        echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail', array( 'class' => 'img-recent-post' ));
                  }
                  else 
                  {
            ?>
                            <img src="http://via.placeholder.com/650x400" alt="" />
                            <?php } ?>
                        </a>

        <div class="container">
            <article class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-0 col-md-12">
                   
                        <?php $categoria = get_the_category()[0]; ?>
                        <p class="<?= $class_color[$categoria->term_id] ?> upper category-style">
                            <?= $categoria->name ?>
                        </p>
                        <h1 class="recent-post-title">
                            <a href="<?php the_permalink();?>">
                                <?= max_title_length(get_the_title()); ?> </a>
                        </h1>

                        <p class="recent-post-content"><?=  get_the_excerpt(); ?></p>
                            
                            <p class="recent-post-info bgc-white-scale pt-xs-10"> <a href="<?php the_permalink(); ?>">
                            Clique aqui para maiores informações </a> </p>
                   
                </div>

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>
            </article>
            </article>
        </div>
</section>
