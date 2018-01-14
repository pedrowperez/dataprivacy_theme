<?php 

get_header(); 
while ( have_posts() ) : the_post(); 

?> 
        <section id="single-course">
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
            <div class="row mt-xs--35">
                <div class="col-xs-10 col-xs-offset-1 bgc-white content-course">
                    
                        <?php $categoria = get_the_category()[0]; ?>
                        <p class="category-style c-grey-dark">  <?= $categoria->name ?> </p>
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
        </section>
    
<?php 

    endwhile;
    get_footer();
    
?>