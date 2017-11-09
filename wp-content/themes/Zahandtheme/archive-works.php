

<?php get_header(); ?>


<div class="row col-xs-8 col-xs-offset-2">
        <div class="filter">
            <a class="filter-link show-all" href="#">All</a>
            <?php 
            $args = array(
                'taxonomy' => 'taxonomy',
                'hide_empty' => false,
                );
            $terms = get_terms($args); 
            foreach ($terms as $t) { ?>
                <a class="filter-link" data-id="<?php echo $t->slug; ?>" href="#"><?php echo $t->name; ?></a>
            <?php } ?>
        </div>
        <br><br><br>
        
        <?php
        if(have_posts()) : while(have_posts()) : the_post();
            $post_id = get_the_id();
            $post_terms = get_the_terms($post_id,'taxonomy');
            $class_terms = '';
            if (!empty($post_terms)) {
                    
                foreach ($post_terms as $pt) {
                    $class_terms .= $pt->slug.' ';
                }
            }
            
        ?>
        
          <div class="<?php echo $class_terms; ?> thumbnails col-xs-6 col-md-3">
            <a href="<?php the_permalink(); ?>" class="thumbnail">
              <img src="<?php the_field('image'); ?>" alt="">
            </a>
            <h5><?php the_title(); ?></h5>
          </div>
        <?php
        endwhile; endif;
        ?>
</div>
<div class="clearfix"></div>
<?php get_footer(); ?>