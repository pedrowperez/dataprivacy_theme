<div class="bg-gradient-post-biblioteca"> </div>
<?php 

get_header(); 
while ( have_posts() ) : the_post(); 

?>
  
<section id="single-post-librabry-<?php the_ID(); ?>">
   <div class="container content-single-biblioteca p-a-0 mb-xs-60">
        <div class="col-xs-12 mt-xs-90"> 
            <article class="bgc-white">
                <div class="img-single-library">
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
                <div class="box-single-library">
                <h1 class="c-grey-dark p-l-7 p-r-7"><strong><?php the_title(); ?></strong></h1>
            <?php the_content(); ?>
            
                <a href="<?= get_post_meta(get_the_ID(), 'compra', true) ?>">  <p class="linke_library bgc-white-scale pt-xs-10">
                        </p> </a> 
                </div>
            </article>
       </div>
   </div> 
</section>
    
<?php 

    endwhile;
    get_footer();
    
?>