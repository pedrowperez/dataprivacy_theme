<?php 
/**
Template Name: Categoria de Cursos*/
get_header();
?>

<main class="recentPOST pt-md-100">
    <div class="container p-a-0">
    <div class="img-header">
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
        
        <div class="row mt-xs-140">
        <?php
   $the_query = new WP_Query( array(
    'category_name' => 'cursos',
    'posts_per_page' => 4
      
   )); 
   if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) : $the_query->the_post(); 

?>
        
           <article class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-4 post bgc-white cat-couse">
            
                    
                    <?php $categoria = get_the_category()[0]; ?>
                    <p class="category-style c-grey-dark">
                        <?= $categoria->name ?>
                    </p>
                    <a href="<?php the_permalink();?>"> <h1 class="c-dark-dark">
                     <strong> <?= max_title_length(get_the_title()); ?> </strong> </h1> </a>

                    <p class="recent-post-content c-greenclue"><?=  get_post_meta(get_the_ID(), 'data_evento', true) ?> </p>
                        
                        <a href="<?php the_permalink(); ?>">  <p class="recent-post-info bgc-white-scale pt-xs-10">
                        Clique aqui para maiores informações </p> </a> 
               
           

              
            </article>

            <?= $i % 3 == 0 ? '<div class="col-xs-12 visible-md visible-lg"></div>' : "" ?>

                <?php $i++; endwhile; ?> 
                
                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <?php
                $paginateArgs = array(
                    'format'  => '?paged=%#%',
                    'current' => $paged, // Reference the custom paged query we initially set.
                    'total'   => $querypostper->max_num_pages // Max pages from our custom query.
                ); ?>
                <!-- Wrap the pagination -->
                <div class="navigation">
                    <?php echo paginate_links( $paginateArgs ); ?>
                </div>

                </div>
              
                
                <? else: ?>
                
                
                <p>
                    <?php _e('Desculpe, nao foi localizado nenhum post.'); ?>
                </p>
                <?php endif; ?>

        </div>
    </div>
</main>


<?php get_footer(); ?>