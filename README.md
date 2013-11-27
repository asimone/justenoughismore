I wrote this to learn how to develop for Wordpress, the whole damn thing from scratch. I'd do a million things differently now, but so it goes.

Email me with bugs, etc. @ andrewsimone@gmail.com

This is released under the GNU licence.

justenoughismore
================

Like any other, place this theme in your wp-content/themes directory.

It also requires the Related Posts by Category plugin: http://wordpress.org/extend/plugins/related-posts-by-category/

WordPress TinyMCE won’t strip iframes in this theme thanks to this little snippet of code in the functions.php: http://wordpress.org/support/topic/google-maps-iframe-deleted-with-tinymce-and-advanced-tinymce#post-1088651

Also, this should look fine in IE9, but support for earlier versions is spotty. "Spotty" essentially means, the site won't break but the sidebar MAY look a little wonky.

If you want to keep true to the aesthetics of my design remove <div id="tags"> <?php the_tags(); ?></div> 

from the single.php file so tags don't show and get rid of  

   <div id="avataradjust">
         <?php echo get_avatar($comment,$size='32',$default='<path_to_url>' ); ?>
	 </div>

in the functions.php to remove avatars. Those are only added so I can put the theme in the official wordpress repository.


You'll need this to have an image show up in the admin panel: https://dl.dropboxusercontent.com/u/114101/screenshot.png
