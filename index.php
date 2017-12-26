<?php 
    $class_color = array( 2 => "c-roxocat" , 3 => "c-bluecat", 4 => "c-orangecat", 5 => "c-greencat");
    //  add_filter( 'the_title', 'max_title_length');
?>

<?php get_header(); ?>
<?php include('recent-post.php'); ?>

<section class="hidden-xs" id="firstNewsleter">
    <div class="container bg-recent-post">
        <div class="row">
            <div class="col-md-12">
            <div class="col-md-5 col-sm-5 col-lg-5 text-center pb-sm-10 pb-xs-20">
                <h3 class="text-left">Entre para nossa lista e receba conteúdos <span> exclusivos e com prioridade </span> </h3>

            </div>
            <div class="col-md-7 col-sm-7 col-lg-7">
                <form id="form-newslatetr" method="post" action="http://blog.bepay.com/?na=s" class="form-inline w-100">
                    <div class="form-group w-100">
                        <input class="i-email" type="email" name="ne" placeholder="Qual é o seu email?" required>
                        <input class="b-email" type="submit" value="CADASTRAR GRÁTIS">
                    </div>
                </form>
        </div>
            </div>
        </div>
    </div>
</section>


<main class="home-main pt-sm-100 pt-xs-100 pt-md-0 pb-md-50">
    <div class="container">
        <div class="row site-main">
            <?php
           
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $postper = array (
                    'posts_per_page' => 6,
                    'paged' => $paged,

                );
                
                $querypostper = new WP_Query( $postper );
                $i = 1;
                if ( $querypostper->have_posts() ) : 
                    while ( $querypostper->have_posts() ) : 
                        $querypostper->the_post();
                        
            ?>
            <?php if($i == 2) : ?>

    
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


                    <?php endif; ?>
            <?php if($i == 6) : ?>
                <article class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-6 col-md-4 hidden-xs hidden-sm">
                    <div class="content-geral">
                        <?php include('post-view.php'); ?>
                    </div>
                </article>
                <div class="col-xs-12 visible-md visible-lg"></div>
            <?php $i++; endif; ?>
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
                    // 'format'  => '?paged=%#%',
                    'current' => $paged,
                    'total'   => $querypostper->max_num_pages
                ); ?>
                <div class="navigation">
                    <?= paginate_links( $paginateArgs ); ?>
                </div>

                </div>
              
                
                <? else: ?>
                <div class="col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-12 col-md-12 col-lg-12">
                <p>
                    <?php _e('Desculpe, nao foi localizado nenhum post.'); ?>
                </p>
                </div>
                <?php endif; ?>

        </div>
    </div>
     
</main>

<?php include('card.php'); ?>

    <section id="faq" class="pt-md-10 pb-md-70 pb-xs-50">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-left"> Aprenda a simplificar sua vida com <b>BePay</b> </h2>
                    </div>
                
                <div class="col-md-3 col-sm-12 col-xs-12">
                     <a href="https://atendimento.bepay.com/hc/pt-br/categories/204543447-Carregar-saldo-na-Conta-BePay" target="_blank"> 
                    <div class="content-fq">
               
                    <p> Como carregar saldo
na conta BePay? </p>
                      </div></a></div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                   <a href="https://atendimento.bepay.com/hc/pt-br/categories/204549727-Quero-vender-utilizando-o-aplicativo-BePay" target="_blank"> 
                    <div class="content-fq">
                
                        <p> Como vender utilizando
o aplicativo? </p>
                     </div></a> </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                     <a href="https://atendimento.bepay.com/hc/pt-br/categories/204532848-Quero-comprar-utilizando-o-aplicativo-BePay" target="_blank"> 
                    <div class="content-fq">
               
                    
                        <p> Como comprar utilizando
o aplicativo? </p>
                     </div></a> </div>

                <div class="col-md-3 col-sm-12 col-xs-12">
                    <a href="https://atendimento.bepay.com/hc/pt-br/articles/235523408-Como-solicito-um-cart%C3%A3o-Pr%C3%A9-Pago-BePay-" target="_blank"> 
                    <div class="content-fq">
                
                    
                        <p> Como solicito um cartão Pré-Pago? </p>
                    </div> </a> </div>


            </div>
        </div>
    </section>
<?php get_footer();?>
