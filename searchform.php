<form action="<?php echo home_url( '/' ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search" class="hidden-md hidden-lg hidden-sm">
		   <input type="search" class="search-field" name="s" value="<?php the_search_query(); ?>">
  </form>
  
  
  <form action="<?php echo home_url( '/' ); ?>" method="get" accept-charset="utf-8" id="searchform" role="search" class="hidden-xs">
<a class="button-open"></a>
<div class="search_inputs">
  <div id="box-inputs">
    <input id="search" name="s"  value="<?php the_search_query(); ?>" placeholder="Pesquisar">
    <input id="search_submit" type="submit">
  <a class="button-closed" hidden></a>
  </div>
 
</div> 


  </form>
   <div class="background-overlay" hidden></div>
  