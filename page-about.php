<?php 
	/*
		Template Name: About Page
	*/
 ?>

<?php get_header(); ?>

<div class="aboutMain">
	<div class="aboutContainer">

		<?php 
  		$lastpost = new WP_query(
  			array(
  			'posts_per_page' => 1,
  			) 
  		); ?>

		<?php if ($lastpost->have_posts() ) :  ?>
			<?php while ($lastpost->have_posts() ) : $lastpost->the_post(); ?>
  	<!-- need author photo -->
  	
  		<?php echo get_avatar( get_the_author_meta( 'ID' ), 200 ); ?>
  	
  	<!-- need author bio (short) -->
  	<h3>About Me</h3>
  	<p>
	  	<?php echo get_the_author_meta('description'); ?>
  	</p>

  			<?php endwhile ?>
  			<?php wp_reset_postdata(); ?>
  		<?php endif; ?>
	</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>