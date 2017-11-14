	


	<?php get_header(); ?>


	


	  <?php 

		$image = get_field('image');

		if( !empty($image) ): 

			// vars
			$url = $image['url'];
			$alt = $image['alt'];

			// thumbnail
			$size = 'large';
			$lar = $image['sizes'][ $size ];
			$width = $image['sizes'][ $size . '-width' ];
			$height = $image['sizes'][ $size . '-height' ];

	?>

			<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">

				<img src="<?php echo $lar; ?>" class="img-responsive peace-img" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

			</a>


		<?php endif; ?>

	<div class="hero-text">
		<?php the_field('text_header'); ?>
	</div>





	
	<?php get_footer(); ?>

