<?php get_header(); ?>
<?php get_sidebar(); ?>
  
<article>	

		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>

		<?php if (is_sticky()) {echo " class=\"sticky\"";} ?>
	<header>
		<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
	</header>	
		<?php the_excerpt() ?>

<?php endwhile; ?>
<div class="navigation">
<div class="alignleft" id="arrows"><?php previous_posts_link('&laquo;') ?></div>
<div class="alignright" id="arrows"><?php next_posts_link('&raquo;','') ?></div>
</div>
<?php else : ?>
<h3>Woops...</h3>
<?php endif; ?>

	</article>		
<?php wp_footer(); ?>
