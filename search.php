<?php get_header(); ?>
<?php get_sidebar(); ?>

<article>
<?php if ( have_posts() ) : ?>
  			Search Results for <?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; _e(''); _e('<span class="kunci">'); echo $key; _e('</span>'); _e(' - '); echo $count . ' '; _e('articles'); wp_reset_query(); ?>
		<?php while(have_posts()) : the_post(); ?>
		<header>
		<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		</header>
		<section>
		 <?php the_excerpt(); ?> 
		</section>
		
		<?php endwhile; ?>
<div class="alignleft" id="arrows"><?php previous_posts_link('&laquo;') ?></div>
<div class="alignright" id="arrows"><?php next_posts_link('&raquo;','') ?></div>
<?php else : ?>
<h2>No posts found. Try a different search?</h2>
<?php get_search_form(); ?>
<?php endif; ?>
</article>

<?php get_footer(); ?>
