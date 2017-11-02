	<?php get_header(); ?>


	<h2><?php the_field('page_header'); ?></h2>

	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">


			      <?php

						// check if the repeater field has rows of data
						if( have_rows('slider') ):
							$i = 0; 
						 	// loop through the rows of data
						    while ( have_rows('slider') ) : the_row();

						        // display a sub field value
						        $img = get_sub_field('image');
						        $title = get_sub_field('title');
						        $content = get_sub_field('content');
						        if ($i == 0) {
						        	$class= 'active';
						        }else{
						        	$class= '';
						        }
					?>

							<div class="item <?php echo $class; ?> ">
							    <img src="<?php echo $img; ?>" alt="Random">
							    <div class="carousel-caption">
							    <h3> <?php echo $title; ?> </h3>
							    <p> <?php echo $content; ?> </p>
							    </div>
							       
							</div>

							
					<?php
							$i++;					
						    endwhile;

						else :

						    // no rows found

						endif;

					?>




			   
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
	</div>

	








	
	<?php get_footer(); ?>

