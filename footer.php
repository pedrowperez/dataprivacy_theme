<div id="modal-contato" class="col-sm-4 col-sm-offset-4 mt-sm-100 bgc-white" hidden>
         <div class="modal-body-contato bgc-white">     
        
     <div class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0">
         <?php if ( $_SERVER['REQUEST_METHOD'] == "POST" ){
send_contact_form();            
} else {  ?>
         <form action="" method="POST" class="form-horizontal" role="form">
                 
             <h1 class="c-dark-dark pb-xs-10"> <strong> Contato </strong> </h1>

             <small> Caso tenha qualquer dúvida ou sugestão sobre o
Data Privacy.br, nossos cursos e conteúdo, por favor, não
hesite em entrar em contato conosco. Estamos à disposição. </small>

<div class="form-group pt-xs-20">
<input type="text" name="" class="form-control" required="required" placeholder="Nome">
</div>
<div class="form-group">
<input type="email" name="" class="form-control" value="" required="required" title="" placeholder="E-mail">
</div>
<div class="form-group"> 
<textarea name="" class="form-control" rows="3" required="required" placeholder="Mensagem"></textarea>

</div>
                 <div class="form-group">
                         <button type="submit" class="btn w-100 bgc-greenclue">Enviar</button>
                 </div>
         </form>
<?php } ?>
     </div>
      </div>
    </div>

<?php wp_footer(); ?>


</body>
<?php $home = get_template_directory_uri(); ?>
<!-- jQuery -->
<script src="<?= $home; ?>/assets/vendor/jquery/jquery.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?= get_template_directory_uri(); ?>/assets/js/main.js"> </script>

    </html>
