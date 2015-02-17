<header class="page-header">
	
	<div class="row slat">

		<?php if ( function_exists( 'z_taxonomy_image_url' ) and z_taxonomy_image_url() != "" ) : ?>

		<figure>
			<?php 
				$thumb = z_taxonomy_image_url();
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