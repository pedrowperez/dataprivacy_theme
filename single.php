<?php 

get_header(); 
while ( have_posts() ) : the_post(); 

?>
  
  <section id="single-post-generic post-<?php the_ID(); ?>">
      <div class="col-xs-12 col-sm-6 p-a-0">
          <div class="img-single-post mt-xs-60">
         
         
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
        </div>

            <div class="col-xs-12 col-sm-6 bgc-white content-single-generic p-a-0">
                <div class="col-xs-12 icon-up">
                    <a href="http://dataprivacy.com.br/dev/category/blog/">
                        <img src="http://dataprivacy.com.br/dev/wp-content/uploads/2018/01/icon_up.png"> </a>
                </div>

                <div class="col-xs-12 pb-xs-30">
                    <h1 class="c-grey-dark"> <strong><?php the_title(); ?></strong> </h1>
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
  </section>
    
<?php 

    comments_template();
    endwhile;
    get_footer();
    
?>

