<?php 
get_header();
?>

<main class="recentPOST pt-md-100">
    <div class="col-xs-12 col-sm-6 p-a-0">
        <div class="img-header-blog">
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
    <div class="col-xs-12 col-sm-6 mt-xs--35 mt-sm--200 content-blog-category">
        <?php
            $the_query = new WP_Query( array(
                'category_name' => 'blog',
                'posts_per_page' => 4
            )); 

            if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
?>
        
        <article class="col-xs-6 col-sm-10 col-sm-offset-1 mb-xs-30 mt-sm-30 mb-sm-30 bgc-white post post_type-blog p-a-0">
                <div class="geral-blog">
                    <div class="img-blog col-sm-5">
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
                    <div class="col-sm-7 hidden-xs p-a-50">
                        <p class="data-box-archive-blog bgc-bluegreen c-white"> <strong> Por: <?=  the_author(); ?> </strong> </p>
                        <a href="#modal-blog-<?= the_ID(); ?>" data-toggle="modal"><h1 class="c-grey-dark"> <strong> <?php the_title(); ?> </strong> </h1> </a>
                        <p class="c-grey-dark"> <?php the_excerpt(); ?> </p>
                    </div>

                    <div class="visible-xs">
                    <a href="#modal-blog-<?= the_ID(); ?>" data-toggle="modal" class="blog-a-1"> <h1 class="c-dark-dark">
                    <?= max_title_length(get_the_title()); ?></h1> </a>

                    <a href="#modal-blog-<?= the_ID(); ?>" data-toggle="modal" class="blog-a-2 bgc-white">  
                    <?= the_excerpt(); ?> </a> 
                    </div>
                </div>
        </article>

    <div id="modal-blog-<?= the_ID(); ?>" class="modal fade modal-single" hidden tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div id="post-<?php the_ID(); ?>" class="single-post">
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 p-a-0 mt-xs-80">
                    <div class="img-single-post mt-xs-60 mt-sm-0">
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
  
                <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 bgc-white content-single-generic mt-sm-80 p-a-0">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-12 icon-up">
                        <a href="http://dataprivacy.com.br/dev/category/blog/">
                            <img src="http://dataprivacy.com.br/dev/wp-content/uploads/2018/01/icon_up.png"> </a>
                    </div>
    
                    <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 pb-xs-30">
                        <h1 class="c-grey-dark"> <strong><?php the_title(); ?></strong> </h1>
                        <?php the_content(); ?>
                        
                    </div>
                    <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0">
                        <?php comments_template(); ?>
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
              
                
                <? else: ?>
                
                
                <p>
                    <?php _e('Desculpe, nao foi localizado nenhum post.'); ?>
                </p>
            
                <?php endif; ?>
            </div>
    </div>
</main>


<?php get_footer(); ?>