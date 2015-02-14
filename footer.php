</main>

<footer id="footer">
<div class="row">
		
	<h3 class="description"><?php bloginfo( "description" ); ?></h3>
	
</div><!-- row -->	
</footer>
	
<?php 
	/*
	Like wp_head(), wp_footer() allows Wordpress to do some necessary work in the footer of the theme.
	For example, sometimes javascript is loaded in the footer rather than the head. 
	Include this function call in every theme.	
	*/
	wp_footer(); 
?>

</body>
</html>