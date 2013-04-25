<?php
function register_my_menus() {
  register_nav_menus(
    array('nav-menu' => __( 'Nav Menu' ) )
  );
}

add_theme_support( 'automatic-feed-links' );

add_action( 'init', 'register_my_menus' );

if ( function_exists ('register_sidebar')) { 
    register_sidebar ('custom'); 
}


add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

  /* Register the 'custom' sidebar. */
	register_sidebar(
		array(
			'id' => 'custom',
			'name' => __( 'Single Page Sidebar' ),
			'description' => __( 'This is the custom single page sidebar.' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h4 class="widget-title">',
			'after_title' => '</h4>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}

add_filter('tiny_mce_before_init', create_function( '$a',
'$a["extended_valid_elements"] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]"; return $a;') );

if ( ! isset( $content_width ) ) $content_width = 660;

function justenoughismore_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>">
      <div class="comment-author vcard">
	<?php comment_author_link() ?> replied on <a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?></a>.
      </div>
      <?php if ($comment->comment_approved == '0') : ?>
         <em><?php _e('Your comment is awaiting moderation.') ?></em>
         <br />
      <?php endif; ?>

      <div class="comment-meta commentmetadata"><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

      <?php comment_text() ?>

     </div>
<?php
        }
?>
