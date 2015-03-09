<?php get_header(); ?>

<?php get_header(); ?>


<main class="frontPage">
	<div class="featured">
		<?php 
	  		$featuredfront = new WP_query(
	  			array(
	  			'posts_per_page' => 1 
	  			) 
	  		); ?>

			<?php if ($featuredfront->have_posts() ) :  ?>
				<?php while ($featuredfront->have_posts() ) : $featuredfront->the_post() ?>
	  				
	  				<a class="featuredLink" href="<?php echo get_permalink( $post->ID )?>">
					<?php echo get_the_post_thumbnail( $post->ID, 'large'); ?>

					<p class="featuredTitle">
						Latest Post <br>
						<?php echo get_the_title( $post->ID ); ?>
					</p>
					</a>
	  			<?php endwhile ?>
	  			<?php wp_reset_postdata(); ?>
	  		<?php endif; ?>
	</div>

	<div class="otherPosts clearfix">
		<h3>Recent Posts</h3>

	  		<?php 
	  		$frontposts = new WP_query(
	  			array(
	  			'posts_per_page' => 3,
	  			'offset' => 1
 	  			) 
	  		); ?>

			<?php if ($frontposts->have_posts() ) :  ?>
				<?php while ($frontposts->have_posts() ) : $frontposts->the_post() ?>
	  		

	  		
	  		<hr>
	  		<div class="postContainer clearfix">
		  		<div class="imgContainer">
		  			<a href="<?php echo get_permalink( $post->ID )?>">
			  			<?php echo get_the_post_thumbnail( $post->ID, 'medium'); ?>
		  			</a>
				</div>
				<div class="textContainer">
					<h3><?php echo get_the_title( $post->ID ); ?></h3>
					<p><?php the_excerpt(); ?></p>
				</div>
			</div>
	  			<?php endwhile ?>
	  			<?php wp_reset_postdata(); ?>
	  		<?php endif; ?>
	  		
	</div>
</main>

<?php get_sidebar(); ?>

<?php // get_template_part('loop') ?>

<?php get_footer(); ?>