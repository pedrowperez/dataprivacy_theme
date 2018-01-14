







<section id="recentPOST" class="visible-xs">
    <?php
   $the_query = new WP_Query( array(
      'post_type' => 'cursos',
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

        <div class="container p-a-0">
            <div class="row mt-xs-170">
               
           <article class="col-xs-10 col-xs-offset-1 post bgc-white cat-couse">
            
                    
           <div class="content-cursos-archive">     
           <?php $categoria = get_the_category()[0]; ?>
           <p class="category-style c-grey-dark">
               <?= $categoria->name ?>
           </p>
           <a href="#modal-cursos-<?= the_ID(); ?>" data-toggle="modal"> <h1 class="c-dark-dark">
            <strong> <?= max_title_length(get_the_title()); ?> </strong> </h1> </a>
   
           <p class="recent-post-content c-greenclue visible-xs"><?=  get_post_meta(get_the_ID(), 'data_evento', true) ?> </p>
               
               <a href="#modal-cursos-<?= the_ID(); ?>" data-toggle="modal" >  <p class="recent-post-info bgc-white-scale pt-xs-10">
               Clique aqui para maiores informações </p> </a> 
                       </div>
           

              
            </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php else : ?>
                <?php endif; ?>
            </div>
            </article>
        </div>
</section>
