<?php
get_header();

?>


<section>
<div class="col-xs-12 col-sm-6 p-a-0">
        <div class="img-header">
        <h1 class="hidden-xs title-geral-desk"> <?php the_title(); ?> </h1>
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
    <div class="col-xs-12 col-sm-6 col-sm-offset-0 p-a-0 mt-xs--35 container-livrary-archive mt-sm--200 p-a-70">
<?php
           if(have_posts()) : while (have_posts()) : the_post(); 
           
?>
        <?php  
        $idcont = the_ID();
        $bg_color = array( 
            'artigos-cientificos' => "bgc-greenclue" ,
            'palestras' => "bgc-bluegreen", 
            'ensaios' => "bgc-pink",
            'entrevistas' => "bgc-yellow",
            'relatorios' => "bgc-purple",

        );
        $class_color = array( 2 => "c-white" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");
        $artigos_cientificos = get_term_by( 'artigos-cientificos', 'tipo-de-biblioteca' );
        $ensaios = get_term_by( 'ensaios', 'tipo-de-biblioteca' );
        $terms = get_the_term_list( $post->ID, 'tipo-de-biblioteca' );
        
        ?>
        <div> </div>
        <article class="col-xs-6 col-sm-6 mb-xs-50 mb-sm-30 post post_type-library">
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

                <!-- <a href="#modal-biblioteca-<?= the_ID(); ?>" data-toggle="modal" class=" library-a-1"> <h1 class="c-dark-dark">
                <?= max_title_length(get_the_title()); ?></h1> </a>
                
                <a href="#modal-biblioteca-<?= the_ID(); ?>" data-toggle="modal" class=" library-a-2 c-white bgc-bluegreen text-center pt-xs-5 pb-xs-5"> -->
                
                <?=
                var_dump( $ensaios);
                var_dump( $artigos_cientificos);
               
                $terms; ?>
                </a> 
            </div>
          
        </article>
        
        <div id="modal-biblioteca-<?= the_ID(); ?>" class="modal fade" hidden tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
         <div class="modal-body">     
    <div class="row mt-xs--35">
    <div class="col-xs-12 col-sm-4 col-sm-offset-7 mt-xs-90 mt-sm-250"> 
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
      </div>
    </div>

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
              
                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer();?>