<div id="carousel-id" data-interval="false" class="carousel slide carousel-fade" data-ride="carousel">
    <h4 class="title-post-view text-left pb-md-20">
        Posts mais visitados
    </h4>
    <ol class="carousel-indicators">


        <?php
      query_posts('meta_key=post_views_count&posts_per_page=4&orderby=meta_value_num&
      order=DESC');
        $p = 0;
      if (have_posts()) : while (have_posts()) : the_post();
   ?>

<a href="<?php the_permalink(); ?>" target="_blank" class="post-view-a">
            <li data-target="#carousel-id" data-post-view="<?= $p ?>" class="<?= $p == 0 ? 'active' : '' ?> btn-link-postview">
                    <?= max_title_length(get_the_title() , 65); ?> 
            </li></a>
            <?php
   $p++;
   endwhile; endif;
?>
    </ol>
    <div class="carousel-inner">
        <?php $p = 0; if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="item <?= $p == 0 ? 'active' : '' ?>">
            <?php 
                    if(get_the_post_thumbnail($value->ID)) 
                    {
                        echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail', array( 'class' => '' ));
                    }
                $p++;?>
        </div>

        <?php
    endwhile; endif;
   ?>
    </div>

</div>
