<?php
/**
Template Name: Sobre Renato*/
get_header(); ?>

<section id="about-renato">
            <div class="container p-a-0">
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
    <div class="container bgc-white content-single-generic p-a-0">
          <div class="col-xs-12 icon-up">
                <a href="http://dataprivacy.com.br/dev/about/" >
                    <img src="http://dataprivacy.com.br/dev/wp-content/uploads/2018/01/icon_up.png"> </a>
        </div>
<div class="col-xs-12 pb-xs-30">
    <h1 class="c-grey-dark pt-xs-10"> <strong> Renato Leite Monteiro </strong> </h1>
    <p class="c-grey-dark pt-xs-20"> Especialista em Proteção de Dados e Privacidade. Professor de Direito Digital e Internacional da Faculdade de Direito da Universidade Presbiteriana Mackenzie. Coordenador do Grupo de Estudos em Direito, Tecnologia e Inovação da Faculdade de Direito do Mackenzie. Doutorando em Engenharia da Computação pela Universidade de São Paulo. LL.M. em Direito e Tecnologia pela New York University e pela National University of Singapore. Mestre em Direito Constitucional pela UFC. Study visitor do Departamento de Proteção de Dados Pessoais do Conselho da Europa. </p>
</div>
            </div>
</section>

<?php get_footer(); ?>