<?php get_header(); ?>
<?php get_sidebar ('custom'); ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<!--[if IE]>
<div id="ieisbad">Using Internet Explorer promotes bad coding habits, isn't very secure, and makes web designers cry (plus this site is not optimized for it). Please consider getting a more modern browser like <a href="http://www.firefox.com">Firefox</a> or <a href="http://www.google.com/chrome">Chrome</a>.</div>
<![endif]-->   
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				
			
		
		<?php the_content(__('(more...)')); wp_link_pages();?>
			<div id="postnav"><?php wp_link_pages(array('next_or_number'=>'next', 'previouspagelink' => ' &laquo; ', 'nextpagelink'=>' &raquo;')); ?></nav>
		

<?php if ( comments_open() ) : ?><p><?php comments_popup_link( 'No comments yet', '1 comment', '% comments so far', 'comments-link', ''); ?></p><?php endif; ?>

		<?php endwhile; ?>
<div class="alignleft" id="arrows"><?php previous_posts_link('&laquo;') ?></div>
<div class="alignright" id="arrows"><?php next_posts_link('&raquo;','') ?></div>
		<?php endif; ?>
	</article>

<?php get_footer(); ?>
