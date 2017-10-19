	
	<?php get_header(); ?>

		<h1><?php the_title(); ?></h1>
		<a href="<?php the_permalink(); ?>">The Link</a>

		<?php 
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
					the_date(); 
					//
					// Post Content here
					//
				} // end while
			} // end if
		?>

		



	<?php get_footer(); ?>
