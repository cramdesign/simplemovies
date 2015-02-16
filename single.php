<?php 
	// print the file header.php which contains the opening <html> 
	// and the top part of the site that is included on every page
	get_header(); 
?>


<div class="row">


	<?php
		// start the loop... make wp look for posts
		if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>


	<div class="post slat">
		
		<figure class="feature">
		<?php 
			// grab the image set in the "Featured Image" control on the post editor
			// this capability has to be enabled first in functions.php
			the_post_thumbnail( 'large' ); 
		?>
		</figure>
		
		<article>
			
			<?php 
				// get the movie title
				the_title( '<h1 class="title">', '</h1>' ); 
			?>
			
			<div class="content">
				<?php 
					// get the main content from the post
					the_content(); 
				?>
			</div><!-- content -->



			<div class="meta">
					
				<?php 
					// output all the actors tagged in the post
					if ( has_term( '', 'actors' ) ) :
					 
						echo '<h3>Starring</h3>';
						echo '<ul class="actors">';
						the_terms( $post->ID, 'actors', '<li>', '</li><li>', '</li>' ); 
						echo '</ul>';
						
					endif;

	
					// output all the directors tagged in the post
					if ( has_term( '', 'directors' ) ) :
					 
						echo '<h3>Director</h3>';
						echo '<ul class="director">';
						the_terms( $post->ID, 'directors', '<li>', '</li><li>', '</li>' );
						echo '</ul>';
						
					endif;
				?>
				
			</div><!-- meta -->
				
		</article>
		
	</div><!-- post -->
	
	
	<?php
		// end the loop... When there are no more posts, stop looking
		endwhile; endif;
	?>


</div><!-- row -->



<?php 
	// print the file footer.php which contains the closing </html> 
	// and the bottom part of the site that is included on every page
	get_footer(); 
?>