<?php
/*
Template Name: Tags
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<article>
  	<header>
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		</header>	
	<p><?php wp_tag_cloud('number=0'); ?></p>
	
</article>
<?php get_footer(); ?>
