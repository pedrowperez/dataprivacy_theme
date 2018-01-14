<?php 

/* Checks if a category is a descendant of another category */

if ( ! function_exists( 'post_is_in_descendant_category' ) ) {
   function post_is_in_descendant_category( $cats, $_post = null ) {
       foreach ( (array) $cats as $cat ) {
           // get_term_children() accepts integer ID only
           $descendants = get_term_children( (int) $cat, 'category' );
           if ( $descendants && in_category( $descendants, $_post ) )
               return true;
       }
       return false;
   }
}

    add_theme_support('post-thumbnails');
	
    add_theme_support( 'html5', array(
			'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
		) );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

function send_contact_form(){        
 
    $siteurl = trailingslashit(get_option('home'));
    $mailto = 'pedrowperez@gmail.com';
    $subject = get_option('blogname'). ' - Novo contato através do site';
    $headers = 'From: ' . get_option('blogname') . ' <'. $mailto .'>' . "\r\n";
    $headers.= 'Reply-To: '.$_POST['email']. "\r\n";
 
    $message  = 'Prezado Administrador,' . "\r\n\r\n";
    $message .= 'A mensagem abaixo foi enviada através do formulário de contato em ' .date("d/m/Y \à\s H:i:s"). "\r\n\r\n";
    $message .= 'MENSAGEM' . "\r\n";
    $message .= '-----------------------' . "\r\n";
 
    while(list($campo, $valor) = each($_POST)){
        if($campo != "submit"){
 
            $message.= ucfirst($campo) .":  ". $valor . "\r\n\r\n";
        }
 
    }    
 
    $message .= '-----------------------' . "\r\n\r\n";
    $message .= 'Atenciosamente,' . "\r\n";
    $message .= get_option('blogname') . "\r\n";
    $message .= $siteurl . "\r\n\r\n\r\n\r\n";
 
    // ok let's send the email
    if( !wp_mail($mailto, $subject, $message, $headers) ){
        echo '<div class="aviso error"><p>A mensagem não pôde ser enviada. Por favor, tente novamente.</p></div>';
    } else {
        echo '<div class="container"><p class="c-dark-grey">Mensagem enviada com sucesso!</p></div>';
    }
 
}

  


function wpdocs_custom_excerpt_length( $length ) {
    return 8;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}


function max_title_length( $title, $max = 300 ) {
    return strlen( $title ) > $max ?
        substr( $title, 0, $max ). "&hellip;" : $title;
}

// add_filter('pre_get_posts', 'cursosfeed');
    
//     function cursosfeed($query){
//         if( is_feed() ){
//             $query->set('post_type', array('post', 'cursos'));
//         }
//         return $query;
//     }

// add_action('init', 'type_post_biblioteca');
 
// function type_post_biblioteca() { 
//     $labels = array(
//         'name' => _x('Biblioteca', 'post type general name'),
//         'singular_name' => _x('Biblioteca', 'post type singular name'),
//         'add_new' => _x('Adicionar nova biblioteca', 'Nova biblioteca'),
//         'add_new_item' => __('Novo biblioteca'),
//         'edit_item' => __('Editar biblioteca'),
//         'new_item' => __('Nova biblioteca'),
//         'view_item' => __('Ver biblioteca'),
//         'search_items' => __('Procurar bibliotecas'),
//         'not_found' =>  __('Nenhuma biblioteca encontrada'),
//         'not_found_in_trash' => __('Nenhuma biblioteca encontrada na lixeira'),
//         'parent_item_colon' => '',
//         'menu_name' => 'Biblioteca'
//     );
  
    
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'public_queryable' => true,
//         'show_ui' => true,           
//         'query_var' => true,
//         'rewrite' => true,
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'taxonomies' => array( 'category' ),
//         'hierarchical' => false,
//         'menu_position' => null,      
//         'supports' => array('title','editor','thumbnail', 'category', 'excerpt', 'custom-fields')
//       ); 

// register_post_type( 'biblioteca' , $args );
// flush_rewrite_rules();
// }


 
// add_action('init', 'type_post_curso');
 
// function type_post_curso() { 
//     $labels = array(
//         'name' => _x('Cursos', 'post type general name'),
//         'singular_name' => _x('Curso', 'post type singular name'),
//         'add_new' => _x('Adicionar novo curso', 'Novo curso'),
//         'add_new_item' => __('Novo Curso'),
//         'edit_item' => __('Editar Curso'),
//         'new_item' => __('Novo Curso'),
//         'view_item' => __('Ver Curso'),
//         'search_items' => __('Procurar Cursos'),
//         'not_found' =>  __('Nenhum curso encontrado'),
//         'not_found_in_trash' => __('Nenhum curso encontrado na lixeira'),
//         'parent_item_colon' => '',
//         'menu_name' => 'Cursos'
//     );
  
    
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'public_queryable' => true,
//         'show_ui' => true,           
//         'query_var' => true,
//         'rewrite' => true,
//         'capability_type' => 'post',
//         'has_archive' => true,
//         'hierarchical' => false,
//         'taxonomies' => array( 'category' ),
//         'menu_position' => null,     
//         'supports' => array('title','editor','thumbnail','comments', 'excerpt', 'custom-fields', 'revisions', 'trackbacks')
//       ); 

// register_post_type( 'cursos' , $args );
// flush_rewrite_rules();
// }

add_action( 'widgets_init', 'incubus_widgets_init' );
function incubus_widgets_init() {
    register_sidebar( array(
        'name' => __( 'After Slide', 'Incubus' ),
        'id' => 'sec-header-widget',
        'description' => '',
        'before_widget' => '<div class="category-widget">',
		'after_widget'  => '</div>',
        ) );
        register_sidebar( array(
        'name' => __( 'Social Sidebar', 'Incubus' ),
        'id' => 'social-sidebar',
        'description' => '',
        'before_widget' => '<div class="social-media-icons box-child">',
		'after_widget'  => ' </div>',
    ) );
}

add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}


add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );
	
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('administrator') && !is_admin()) {
  show_admin_bar(false);
}
}