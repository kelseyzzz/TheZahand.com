	<?php get_header(); ?>



	<div class="row">

		<?php

			$args = array(
				'post_type' => 'leader',
				'post_per_page' => -1,
				'post_status' => 'publish'

				);

			// The Query
			$the_query = new WP_Query( $args );

			// The Loop
			if ( $the_query->have_posts() ) {
				
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
				?>
					
					

						<div> <?php the_title(); ?> </div>
					
						<div class="col-xs-6 col-md-3">
						    <a href="" class="thumbnail">
						      <img src="<?php the_field("image"); ?>" alt="">
						    </a>
						</div>
						<div> <?php the_field("linkedin"); ?> </div>
						<div> <?php the_field("bio"); ?> </div>
					

				<?php

				}

				
				/* Restore original Post Data */
				wp_reset_postdata();
			} else {
				// no posts found
		}
		?>

		

	</div>

	<?php get_footer(); ?>
