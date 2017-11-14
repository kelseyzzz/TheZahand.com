


<?php 

	/*

	Template Name: About KAZA
	
	*/

 ?>

	<?php get_header(); ?>

	<h1> <?php the_title(); ?> </h1>

	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				the_content();
			}
		}


	?>

	<?php 

		$image = get_field('image');

		if( !empty($image) ): ?>

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

	<?php endif; ?>


	<?php the_field('Words'); ?>






	<?php get_footer(); ?>











