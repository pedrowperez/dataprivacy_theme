<?php get_header(); ?>
<?php    $bg_color = array( 2 => "bgc-roxocat" , 3 => "bgc-bluecat", 4 => "bgc-orangecat", 5 => "bgc-greencat");
 $class_color = array( 2 => "c-roxocat" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");
 add_filter( 'the_title', 'max_title_length'); ?>
<main class="home-main pt-md-100">
    <div class="container">
    <div class="box-cat pt-md-50 pb-md-50 pt-xs-90 pb-xs-20">
        <?php $categoria = get_the_category()[0]; ?>
                        <p class="<?= $bg_color[$categoria->term_id] ?> upper cat-single">
                            <?= $categoria->name ?> </p> 
        </div>
        
        <div class="row">
            <?php 
           
        $i = 1;
        if ( have_posts() ) : while ( have_posts() ) : the_post(); 
        ?>
        
           <article class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-md-offset-0 col-sm-6 col-md-4 post">
                <div class="content-geral">
                    <div class="content-image">
                        <a href="<?php the_permalink();?>">
                            <?php 
                  if(get_the_post_thumbnail($value->ID)) 
                  {
                        echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail', array( 'class' => 'featured-image-thumb' ));
                  }
                  else 
                  {
            ?>
                            <img src="http://via.placeholder.com/650x400" alt="" />
                            <?php } ?>
                        </a>
                    </div>
                    <div class="content-meta">
                        <?php $categoria = get_the_category()[0]; ?>
                        <p class="<?= $class_color[$categoria->term_id] ?> upper">
                            <?= $categoria->name ?> </p> 
                    </div>
                    <div class="content-title  p-a-50">
                        <h3>
                            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <?= max_title_length(get_the_title() , 75); ?>
                            </a>
                        </h3>
                          <?php the_excerpt(); ?> 
                         <p class="recent-post-le"> <a href="<?php the_permalink(); ?>">
                                        Leia mais </a> </p>
                    </div>
                    <div class="content-data">
                        <small>
                            <?php the_time( get_option( 'date_format' ) ); ?> | Por
                            <?php the_author_posts_link() ?>
                        </small>
                    </div>

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

  <article class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 hidden-lg hidden-md hidden-sm mb-xs-30">
                <div class="content-geral-m">
                <h3 class="text-center pt-xs-10 pb-xs-10">Quer promoções exclusivas e dicas especiais? </h3>
                    <form method="post" action="http://blog.bepay.com/?na=s" onsubmit="return newsletter_check(this)" class="form-inline">
                    <div class="form-inline-m">
                        <input class="i-email-m" type="email" name="ne" required placeholder="Assine nossa newsletter!">
                        <input class="b-email-m" type="submit" value="">
                    </div>
                    </form>
                </div>
            </article>

<?php include('newsletter.php'); ?>


<?php get_footer(); ?>