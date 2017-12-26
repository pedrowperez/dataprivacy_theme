<?php


if ( post_password_required() )
    return;
?>
 
<div id="container-comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <ul class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ul',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ul><!-- lista de comentario -->
 
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php comment_form(); ?>
 
</div><!-- #comments -->