<?php
/**
Template Name: Sobre Bruno*/
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
    <h1 class="c-grey-dark pt-xs-10"> <strong> Bruno Bioni </strong> </h1>
    <p class="c-grey-dark pt-xs-20"> Mestre com louvor em Direito Civil na Faculdade de Direito da Universidade de São Paulo (2016), pós-graduado em Direito Civil e Consumidor pela Escola Paulista de Direito (2013) e graduado em Direito pelo Centro Universitário das Faculdades Metropolitanas Unidas (2012). Foi study visitor do Departamento de Proteção de Dados Pessoais do Conselho da Europa (2015) e pesquisador visitante no Centro de Pesquisa de Direito, Tecnologia e Sociedade da Faculdade de Direito da Universidade de Ottawa (2014-2015). Atualmente é pesquisador do Rede Latino-Americana de Estudos sobre Vigilância, Tecnologia e Sociedade e advogado do Núcleo de Informação e Coordenação do Ponto Br/NIC.br. É também professor-orientador na Pós-Graduação de Propriedade Intelectual e Novos Negócios da FGV-SP e professor-convidado do LLM de Direito Civil da Faculdade de Direito de Ribeirão Preto da Universidade de São Paulo; </p>
</div>
            </div>
</section>

<?php get_footer(); ?>