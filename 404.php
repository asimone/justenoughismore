<?php get_header(); ?>
<?php get_sidebar(); ?>
  <article>

<h2><em>Dang</em>, son! You just 404'd!</h2>
If I were you, I'd just go <a href="<?php echo home_url(); ?>">home</a> before you embarrass yourself.	
<object width="640" height="510"><param name="movie" value="http://www.youtube.com/v/oHg5SJYRHA0?fs=1&amp;hl=en_US"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/oHg5SJYRHA0?fs=1&amp;hl=en_US&autoplay=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="640" height="510"></embed></object>
Unless, of course, you're searching for something.
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <input type="text" value="" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
    </div>
</form>			
	</article>

<?php get_footer(); ?>
