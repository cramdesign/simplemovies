<?php global $wp_query;

	$total_pages = $wp_query->max_num_pages;

	if ( $total_pages > 1 ){

		$current_page = max( 1, get_query_var('paged') );

		echo '<div class="postnav">';

		echo paginate_links(array(
			'base' 		=> get_pagenum_link( 1 ) . '%_%',
			'current' 	=> $current_page,
			'total' 	=> $total_pages,
			'prev_text' => 'Prev',
			'next_text' => 'Next'
		));

		echo '</div>';

	}
	
?>