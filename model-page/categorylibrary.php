<?php 
/**
Template Name: Categoria de Biblioteca*/
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
    'category_name' => 'biblioteca',
    'posts_per_page' => 4
      
   )); 
   if ( $the_query->have_posts() ) :
   while ( $the_query->have_posts() ) : $the_query->the_post(); 

?>
        
        <article class="col-xs-5 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-4 post bgc-white post_type-library p-a-0">
        <div class="geral-library">
         <div class="img-library">
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

        
        <?php $obj = get_post_type_object( 'biblioteca' ); ?>
        <a href="<?php the_permalink();?>" class="library-a-1"> <h1 class="c-dark-dark">
          <?= max_title_length(get_the_title()); ?></h1> </a>

            <a href="<?php the_permalink(); ?>" class="library-a-2 c-white bgc-bluegreen text-center pt-xs-5 pb-xs-5">
            <?= $obj->labels->singular_name; ?> </a> 
  </div>
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