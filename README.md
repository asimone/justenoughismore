justenoughismore
================

Like any other, place this theme in your wp-content/themes directory.

it also requires the Related Posts by Category plugin: http://wordpress.org/extend/plugins/related-posts-by-category/

WordPress TinyMCE won’t strip iframes in this theme thanks to this little snippet of code in the functions.php: http://wordpress.org/support/topic/google-maps-iframe-deleted-with-tinymce-and-advanced-tinymce#post-1088651

also, this should look fine in IE9, but support for earlier versions is spotty. "spotty" essentially means, the site won't break but the sidebar MAY look a little wonky.

if you want to keep true to the aesthetics of my design remove <div id="tags"> <?php the_tags(); ?></div> 
from the single.php file so tags don't show and get rid of  

   <div id="avataradjust">
         <?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
	 </div>

in the functions.php to remove avatars. Those are only added so I can put the theme in the official wordpress repository.

If you are curious about the justifications for my design or want to download the alternative, Wordpress unapproved version with the suggested changes above go to: http://andrewsimone.com/justenoughismore/
