<?php 
	// print the file header.php which contains the opening <html> 
	// and the top part of the site that is included on every page
	get_header(); 
?>


<div class="row">
	
	<?php
		// check for posts
		if ( have_posts() ) : 
	?>	
	
	<header class="page-header">
		<?php
			// get the title and descripton
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
	</header><!-- .page-header -->

	<section class="post-gallery">
		
		<?php
						
			// start the loop... make wp look for posts
			while ( have_posts() ) : the_post();
		
			echo 'this is inside the loop';
		
			// print the content of the post to the screen
			// look at the file inc/content.php for how this is formatted
			get_template_part( 'inc/thumbnail', get_post_format() );
			
			
			// end the loop... When there are no more posts, stop looking
			endwhile;
			
			
			// if there are more posts than fit on a blog page
			// include a file to allow for navigation between blog pages
			get_template_part( 'inc/pagination' );
		?>

	</section><!-- post-gallery -->
	
	<?php
		// check for posts
		endif;
	?>	
	
</div><!-- row -->



<?php 
	// print the file footer.php which contains the closing </html> 
	// and the bottom part of the site that is included on every page
	get_footer(); 
?>