<?php 
	// print the file header.php which contains the opening <html> 
	// and the top part of the site that is included on every page
	get_header(); 
?>


<header class="page-header">
	
	<div class="row slat">

		<?php if ( function_exists( 'z_taxonomy_image_url' ) and z_taxonomy_image_url() != "" ) : ?>

		<figure>
			<?php 
				$thumb = z_taxonomy_image_url(  );
				echo( '<img src="' . $thumb . '">' );
			?>
		</figure>
		
		<?php endif; ?>
		
		<article>	
			<?php
				// get the title and descripton
				the_archive_title( '<h1 class="title">', '</h1>' );
				the_archive_description( '<div class="content">', '</div>' );
			?>
		</article>
		
	</div><!-- row -->
		
</header><!-- .page-header -->


<div class="archive row">
	
	<section class="post-gallery">
		
		<?php
						
			// start the loop... make wp look for posts
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		
		
			// print the content of the post to the screen
			// look at the file inc/content.php for how this is formatted
			get_template_part( 'inc/thumbnail', get_post_format() );
			
			
			// end the loop... When there are no more posts, stop looking
			endwhile; endif;
			
			
			// if there are more posts than fit on a blog page
			// include a file to allow for navigation between blog pages
			get_template_part( 'inc/pagination' );
		?>

	</section><!-- post-gallery -->
	
</div><!-- row -->



<?php 
	// print the file footer.php which contains the closing </html> 
	// and the bottom part of the site that is included on every page
	get_footer(); 
?>