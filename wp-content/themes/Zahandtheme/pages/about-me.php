


<?php 

	/*

	Template Name: About KAZA
	
	*/

 ?>

	<?php get_header(); ?>

	

	
	<div class="hero-header">
		<h1> <?php the_field('about_title'); ?> </h1>

		<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
				}
			}


		?>
	</div>
	<div class="hero-about">
	</div>
	
		<?php 

			$image = get_field('image');

			if( !empty($image) ): ?>

				
				<img class="img-responsive dog--img"  src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				

		<?php endif; ?>
	


	<?php the_field('Words'); ?>






	<?php get_footer(); ?>











