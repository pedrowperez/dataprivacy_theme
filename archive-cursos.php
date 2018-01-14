<?php
get_header();


?>

<section class="mt-sm-60">
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
    <div class="col-xs-12 col-sm-6 p-a-0 mt-xs--35 mt-sm-70 mt-sm--200">
<?php
           if(have_posts()) : while (have_posts()) : the_post(); 
?>
        
        <article class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 post bgc-white cat-couse">
        <div class="img-header-cursos">
        <p class="hidden-xs data-geral-desk c-bluegreen"> <?=  get_post_meta(get_the_ID(), 'data_evento', true) ?> </p>
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
<div id="modal-cursos-<?= the_ID(); ?>" class="modal fade" hidden tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-body">     
    <div class="row mt-xs--35">
        <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-7 bgc-white content-course">
            
                <?php $categoria = get_the_category()[0]; ?>
                <p class="category-style c-grey-dark">  <?= $categoria->name ?> IOSAJIOASJOIS</p>
                <h1 class="c-grey-dark text-left mt-xs-0 pb-xs-10"> <strong> <?php the_title(); ?> </strong> </h1>
                <p class="data_evento"> <?=  get_post_meta(get_the_ID(), 'data_evento', true) ?> </p>
                <p class="local"> <?=  get_post_meta(get_the_ID(), 'local', true) ?> </p>
                <p class="horario"> <?=  get_post_meta(get_the_ID(), 'horario', true) ?></p>
                <p class="detalhe_1"><?=  get_post_meta(get_the_ID(), 'detalhe_1', true) ?></p>
                <p class="detalhe_2"><?=  get_post_meta(get_the_ID(), 'detalhe_2', true) ?></p>
                <hr>
                <?= the_content(); ?>
                
                <a href="<?= get_post_meta(get_the_ID(), 'compra', true) ?>">  
                <p class="linke_compra bgc-white-scale pt-xs-10">
                    Clique aqui para maiores informações </p> </a> 
                
        </div>
    </div>
      </div>
    </div>
                <?php endwhile; ?> 
    
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