<nav>
  <?php wp_nav_menu( array( 'theme_location' => 'nav-menu' ) ); ?>
	<ul>
		<?php wp_list_categories('title_li='); ?>
</ul>
		<ul id="posts">
		<li>Related:</li>
  		<?php do_action(
 		   'related_posts_by_category',
  		    array(
   		   'orderby' => 'RAND',
	           'order' => 'DESC',
	           'limit' => 6,
  	           'echo' => true,
                   'before' => '<li>',
                   'inside' => '',
                   'outside' => '',
                   'after' => '</li>',
                   'rel' => 'nofollow',
                   'type' => 'post',
                   'message' => 'this post is beautiful and unique snowflake'
                   )
                   ) ?>
	</ul>
		<section id="widgets">
		<?php dynamic_sidebar( 'custom' ); ?>
		</section>
<ul id="designed"><li>Designed by <a href="http://andrewsimone.com">Andrew Simone</a></li></ul>
</nav>
