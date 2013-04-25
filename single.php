<?php get_header(); ?>
<?php get_sidebar ('custom'); ?>


  <article>

<!--[if IE]>
<div id="ieisbad">Using Internet Explorer promotes bad coding habits, isn't very secure, and makes web designers cry (plus this site is optimized for it). Please consider getting a more modern browser like <a href="http://www.firefox.com">Firefox</a> or <a href="http://www.google.com/chrome">Chrome</a>.</div>
<![endif]-->    


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		<?php the_content($more_link_text); wp_link_pages();?>
	<?php endwhile; endif; ?>

<?php comments_template( '', true ); ?>

	</article>

<?php get_footer(); ?>
