<footer >
	<div class="innerFooter clearfix">
  		<div class="authorContainer">

  		<?php 
  		$lastpost = new WP_query(
  			array(
  			'posts_per_page' => 1,
  			) 
  		); ?>

		<?php if ($lastpost->have_posts() ) :  ?>
			<?php while ($lastpost->have_posts() ) : $lastpost->the_post(); ?>
  	<!-- need author photo -->
  	
  		<?php echo get_avatar( get_the_author_meta( 'ID' ), 125 ); ?>
  	
  	<!-- need author bio (short) -->
  	<p>
	  	<?php $bio = get_the_author_meta('description'); ?>
	  	<?php $bio =  explode('.', $bio);?>
	  	<?php echo $bio[0] . '.' ?>

	  	<a href="#">Learn More..</a>
  	</p>

  			<?php endwhile ?>
  			<?php wp_reset_postdata(); ?>
  		<?php endif; ?>
   <div class="socialIcons">
   	<!-- need social icons (plugin?) -->

   	<div id="footer-sidebar" class="secondary">
	   	<div id="footer-sidebar1">
	   	<?php
	   	if(is_active_sidebar('footer-sidebar-1')){
	   	dynamic_sidebar('footer-sidebar-1');
	   	}
	   	?>
	   	</div>
   	</div>

   </div>
   </div>
	<div class="recentposts">
		<!-- need recent posts, probably a loop -->
		<?php 
		$footerPosts = new WP_query(
			array(
				'posts_per_page' => 6,
				)
		); ?>
		<?php if ($footerPosts -> have_posts() ) : ?>
			<?php while ($footerPosts->have_posts()) : $footerPosts->the_post(); ?>

				<?php echo get_the_post_thumbnail( $post->ID, 'square'); ?>
			<?php endwhile ?>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>

	</div>
	</div>
  <div class="container">
    <p>&copy; Jenny <?php echo date('Y'); ?></p>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>