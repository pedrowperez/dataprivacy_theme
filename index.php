<?php get_header(); ?>






<div id="carousel-id" class="carousel slide hidden-xs" data-ride="carousel">
    
    <div class="carousel-inner">
        <div class="item active">
        <?php

$cursoview = array (
    'post_type' => 'cursos',
    'posts_per_page' => 1,
);

$query_curso_per = new WP_Query( $cursoview );
    while ( $query_curso_per->have_posts() ) : 
        $query_curso_per->the_post();
        
?>
<a href="<?= the_permalink(); ?>" class="img-banner-index-1">
            <?php
if(get_the_post_thumbnail($value->ID)) 
{
echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail');
}?>
</a>
<div class="content-box-carousel-one">
<p class="data-box  c-bluegreen"> <strong><?=  get_post_meta(get_the_ID(), 'data_evento', true) ?> </strong></p>
<?php $categoria = get_the_category()[0]; ?>
        <p class="category-style c-white">
            <?= $categoria->name ?>
        </p>

        <h1 class="c-white"> <strong> <?php the_title(); ?> </strong> </h1>
</div>

<?php
    endwhile;
    ?>

        </div>
        <div class="item">
        <?php

$cursoview = array (
    'post_type' => 'post',
    'posts_per_page' => 1,
);

$query_curso_per = new WP_Query( $cursoview );
    while ( $query_curso_per->have_posts() ) : 
        $query_curso_per->the_post();
        
?>
<a href="<?= the_permalink(); ?>" class="img-banner-index-2">
            <?php
if(get_the_post_thumbnail($value->ID)) 
{
echo get_the_post_thumbnail($value->ID, $size = 'post-thumbnail');
}?>
</a>
<div class="content-box-carousel-two">
<p class="data-box  bgc-bluegreen c-white"> <strong> Por: <?=  the_author(); ?> </strong> </p>
<h1 class="c-white mt-md-0" > <strong> <?php the_title(); ?> </strong> </h1>
</div>

<?php
    endwhile;
    ?>

        </div>
       
    </div>
    <a class="left carousel-control" href="#carousel-id" data-slide="prev"> < </a>
    <a class="right carousel-control" href="#carousel-id" data-slide="next">></a>
</div>

<?php include('recent-post.php'); ?>

<main class="home-main visible-xs">
    <div class="container p-a-0">
            <?php

$blog_per = array (
    'posts_per_page' => 1,
);

$query_blog_per = new WP_Query( $blog_per );
if ( $query_blog_per->have_posts() ) : 
    while ( $query_blog_per->have_posts() ) : 
        $query_blog_per->the_post();
        
?>

 <article class="col-xs-6 post post_type-blog">
    <div class="geral-blog">
<div class="img-blog">
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


<?php $categoria = get_the_category()[0]; ?>
<a href="<?php the_permalink();?>" class="blog-a-1"> <h1 class="c-dark-dark">
<?= max_title_length(get_the_title()); ?></h1> </a>

<a href="<?php the_permalink(); ?>" class="blog-a-2 bgc-white">  
<?= the_excerpt(); ?> </a> 
</div>



</article>
     <?php endwhile; ?>
 <?php endif; ?>


            <?php
                $course_per = array (
                    'post_type' => 'bibliotecas',
                    'posts_per_page' => 1,
                    'paged' => $paged,
                );
                
                $query_course_per = new WP_Query( $course_per );
                if ( $query_course_per->have_posts() ) : 
                    while ( $query_course_per->have_posts() ) : 
                        $query_course_per->the_post();
                        
            ?>
           
           <article class="col-xs-6 post post_type-library p-l-0">
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

           
           <?php $obj = get_post_type_object( 'bibliotecas' ); ?>
           <a href="<?php the_permalink();?>" class="library-a-1"> <h1 class="c-dark-dark">
             <?= max_title_length(get_the_title()); ?></h1> </a>

               <a href="<?php the_permalink(); ?>" class="library-a-2 c-white bgc-bluegreen text-center pt-xs-5 pb-xs-5">
               <?= $obj->labels->singular_name; ?> </a> 
     </div>
   </article>

                <?php endwhile; ?>
                <?php endif; ?>


               

                    </div>
                </div>
</main>


<?php include('newsletter.php');
get_footer();?>
