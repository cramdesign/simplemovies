<?php 
	// print the file header.php which contains the opening <html> 
	// and the top part of the site that is included on every page
	get_header(); 
?>

<!-- index.php -->

<?php
	// tests to see if this is an archive page
	// if true, display a special page header
	if( is_archive() ) get_template_part( 'inc/archive', 'header' );
?>


<div class="row">
	
	<section class="post-gallery">
		
		<?php
			// THE LOOP
			// start the loop... make wp look for posts
			if ( have_posts() ) : while ( have_posts() ) : the_post();
		
		
			// print the content of the post to the screen
			// look at the file inc/content.php for how this is formatted
			get_template_part( 'inc/thumbnail' );
			
			
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