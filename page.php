<?php get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>
    ?>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 space-header">
                </div>
            </div>
        </div>

    </header>

    <div class="container" id="pagecontent" tabindex="-1">
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php the_permalink();?>">
                            <?php 
                  if(get_the_post_thumbnail($value->ID)) 
                  {
                        echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail', array( 'class' => 'img-responsive' ));
                  }
                  else 
                  {
                    ?>
                            <img src="http://via.placeholder.com/650x400" alt="" />
                            <?php } ?>

                <div class="intro-text">
                        <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

<section id="idealizadores">
  <div class="container">
  <div class="row">
    <div class="col-xs-5 col-xs-offset-1">
    
    </div>
    <div class="col-xs-5 col-xs-offset-1">
    
    </div>
  </div>
  </div>
</section>



    <?php
    endwhile;
?>


        <?php get_footer(); ?>
