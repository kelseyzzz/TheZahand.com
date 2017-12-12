	


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
				
		<div class="header-words">
			<h2> <?php the_field('about_sub-header'); ?> </h2>
			<h1> <?php the_field('about-header'); ?> </h1>
		</div>

	
		</div>
    </div>


	<div class="about-text-section">
		<div class="block-b-container">
			<div class="block-three">
			
			</div>
			<div class="block-four">
				
			</div>

	
		</div>
			
			<div class="about-bubble-text">
				<?php the_field('about_kelsey_description') ?>
			</div>
	</div>

	<div class="three-pic-section">

		<div class="left-pic">
			<?php the_field('about_kelsey_list') ?>
		</div>

		<div class="dog-section">
			<?php 

				$dogImage = get_field('about_dog_image');

				if( !empty($dogImage) ): ?>

					
					<img class="dog--img"  src="<?php echo $dogImage['url']; ?>" alt="<?php echo $dogImage['alt']; ?>" />
					

			<?php endif; ?>

			<div class="roxy-quote">
				<p>I want all of your food</p>
				<div class="quote-img"></div>
			</div>


		</div>
		<div class="right-pic">


			<?php 

				$drawingImage = get_field('about_drawing_image');

				if( !empty($drawingImage) ): ?>

					
					<img class="img-responsive drawing--img"  src="<?php echo $drawingImage['url']; ?>" alt="<?php echo $drawingImage['alt']; ?>" />
					

			<?php endif; ?>
				
		</div>
		

	</div>

	<div class="pic-section-mobile">
		<div class="dog-mobile">
			<?php 

				$dogmImage = get_field('about_dog_image');

				if( !empty($dogmImage) ): ?>

					
					<img class="img-responsive dogm--img"  src="<?php echo $dogmImage['url']; ?>" alt="<?php echo $dogmImage['alt']; ?>" />
					

			<?php endif; ?>
			
		</div>
		<div class="right-dot-mobile">
			<?php the_field('about_kelsey_list') ?>
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


<div class="dashed-line"></diiv>

<div class="contact-section">
<div id="contact-identifier"></div>
	

	<div class="contact-header-container">
		<?php the_field('contact_header') ?>
	</div>
	<div class="info-container">
		<div class="info-box-left"></div>
		<div class="contact-information">
			<?php the_field('contact_info') ?>
		</div>
	</div>

	<div class="boom">
		<div class="social-nav">
            <ul class="social-list">
            	<li><a href="https://www.facebook.com/kelsey.zahand?ref=bookmarks" class="icon-10 facebook" title="Facebook"><svg viewBox="0 0 512 512" class="facebook"><path d="M211.9 197.4h-36.7v59.9h36.7V433.1h70.5V256.5h49.2l5.2-59.1h-54.4c0 0 0-22.1 0-33.7 0-13.9 2.8-19.5 16.3-19.5 10.9 0 38.2 0 38.2 0V82.9c0 0-40.2 0-48.8 0 -52.5 0-76.1 23.1-76.1 67.3C211.9 188.8 211.9 197.4 211.9 197.4z"/></svg><!--[if lt IE 9]><em>Facebook</em><![endif]--></a></li>
				<li><a href="https://www.instagram.com/insidewonderland/" class="icon-15 instagram" title="Instagram"><svg viewBox="0 0 512 512" class="instagram"><g><path d="M256 109.3c47.8 0 53.4 0.2 72.3 1 17.4 0.8 26.9 3.7 33.2 6.2 8.4 3.2 14.3 7.1 20.6 13.4 6.3 6.3 10.1 12.2 13.4 20.6 2.5 6.3 5.4 15.8 6.2 33.2 0.9 18.9 1 24.5 1 72.3s-0.2 53.4-1 72.3c-0.8 17.4-3.7 26.9-6.2 33.2 -3.2 8.4-7.1 14.3-13.4 20.6 -6.3 6.3-12.2 10.1-20.6 13.4 -6.3 2.5-15.8 5.4-33.2 6.2 -18.9 0.9-24.5 1-72.3 1s-53.4-0.2-72.3-1c-17.4-0.8-26.9-3.7-33.2-6.2 -8.4-3.2-14.3-7.1-20.6-13.4 -6.3-6.3-10.1-12.2-13.4-20.6 -2.5-6.3-5.4-15.8-6.2-33.2 -0.9-18.9-1-24.5-1-72.3s0.2-53.4 1-72.3c0.8-17.4 3.7-26.9 6.2-33.2 3.2-8.4 7.1-14.3 13.4-20.6 6.3-6.3 12.2-10.1 20.6-13.4 6.3-2.5 15.8-5.4 33.2-6.2C202.6 109.5 208.2 109.3 256 109.3M256 77.1c-48.6 0-54.7 0.2-73.8 1.1 -19 0.9-32.1 3.9-43.4 8.3 -11.8 4.6-21.7 10.7-31.7 20.6 -9.9 9.9-16.1 19.9-20.6 31.7 -4.4 11.4-7.4 24.4-8.3 43.4 -0.9 19.1-1.1 25.2-1.1 73.8 0 48.6 0.2 54.7 1.1 73.8 0.9 19 3.9 32.1 8.3 43.4 4.6 11.8 10.7 21.7 20.6 31.7 9.9 9.9 19.9 16.1 31.7 20.6 11.4 4.4 24.4 7.4 43.4 8.3 19.1 0.9 25.2 1.1 73.8 1.1s54.7-0.2 73.8-1.1c19-0.9 32.1-3.9 43.4-8.3 11.8-4.6 21.7-10.7 31.7-20.6 9.9-9.9 16.1-19.9 20.6-31.7 4.4-11.4 7.4-24.4 8.3-43.4 0.9-19.1 1.1-25.2 1.1-73.8s-0.2-54.7-1.1-73.8c-0.9-19-3.9-32.1-8.3-43.4 -4.6-11.8-10.7-21.7-20.6-31.7 -9.9-9.9-19.9-16.1-31.7-20.6 -11.4-4.4-24.4-7.4-43.4-8.3C310.7 77.3 304.6 77.1 256 77.1L256 77.1z"/><path d="M256 164.1c-50.7 0-91.9 41.1-91.9 91.9s41.1 91.9 91.9 91.9 91.9-41.1 91.9-91.9S306.7 164.1 256 164.1zM256 315.6c-32.9 0-59.6-26.7-59.6-59.6s26.7-59.6 59.6-59.6 59.6 26.7 59.6 59.6S288.9 315.6 256 315.6z"/><circle cx="351.5" cy="160.5" r="21.5"/></g></svg><!--[if lt IE 9]><em>Instagram</em><![endif]--></a></li>
				<li><a href="https://www.linkedin.com/in/kelsey-zahand-9774b3b5/" class="icon-17 linkedin" title="LinkedIn"><svg viewBox="0 0 512 512" class="linkedin"><path d="M186.4 142.4c0 19-15.3 34.5-34.2 34.5 -18.9 0-34.2-15.4-34.2-34.5 0-19 15.3-34.5 34.2-34.5C171.1 107.9 186.4 123.4 186.4 142.4zM181.4 201.3h-57.8V388.1h57.8V201.3zM273.8 201.3h-55.4V388.1h55.4c0 0 0-69.3 0-98 0-26.3 12.1-41.9 35.2-41.9 21.3 0 31.5 15 31.5 41.9 0 26.9 0 98 0 98h57.5c0 0 0-68.2 0-118.3 0-50-28.3-74.2-68-74.2 -39.6 0-56.3 30.9-56.3 30.9v-25.2H273.8z"/></svg><!--[if lt IE 9]><em>LinkedIn</em><![endif]--></a></li>
            </ul>
      </div>
	</div>


	
	<div class="insta-container">
		<div class="insta-header"> 
			<h5>Latest Posts...</h5>
		 </div>
		<div class="insta-feed">
		<?php the_field('instagram') ?>
		</div>
	</div>

	
</div>






	
	<?php get_footer(); ?>

