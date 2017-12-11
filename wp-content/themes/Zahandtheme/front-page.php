	


	<?php get_header(); ?>


	


	  <?php 


	  	if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
				}
			}


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

<div class="introduction">

			<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">

				<img src="<?php echo $lar; ?>" class="img-responsive peace-img" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

			</a>


			


				<?php endif; ?>

			<div class="hero-text">
				<?php the_field('text_header'); ?>
			</div>
</div>


<div class="about-me">
	<div id="about-me-identifier"></div>	

	<div class="header-container">
		<div class="block-A-container">
			<div class="block-one">
			
			</div>
			<div class="block-two">
				
			</div>
				
		</div>
		
		<h1> <?php the_field('about-header'); ?> </h1>
		<h2> <?php the_field('about_sub-header'); ?> </h2>

	
		
	</div>


	<div class="left-right-container">
		<div class="left-about">
			<div class="left-description">
				<?php the_field('about_kelsey_description') ?>
			</div>
		</div>
		<div class="right-about">

			<?php 

				$dogImage = get_field('about_dog_image');

				if( !empty($dogImage) ): ?>

					
					<img class="img-responsive dog--img"  src="<?php echo $dogImage['url']; ?>" alt="<?php echo $dogImage['alt']; ?>" />
					

			<?php endif; ?>
				
		</div>
	</div>
	
</div>




<div class="portfolio-section">
	<div id="portfolio-identifier"></div>

	<div class="development">
		
	</div>

	<div class="photography">
		
	</div>
	

</div>



<div class="contact-section">
	<div id="contact-identifier"></div>

	<div class="contact-header-container">
		<?php the_field('contact_header') ?>
	</div>
	<div class="contact-information">
		<?php the_field('contact_info') ?>
	</div>
	</div>
	<div class="insta-feed">
		<div class="insta-header"> 
			<h5>Latest Posts...</h5>
		 </div>
		<?php the_field('instagram') ?>
	</div>

	
</div>






	
	<?php get_footer(); ?>

