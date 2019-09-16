<?php get_header(); ?>
    <h2 class="page-heading">All Blogs</h2>
      <section>
      <?php

        while (have_posts()) {
            the_post();
        ?>
         <div class="card">
            <div class="card-image">
               <a href="<?php echo the_permalink();?>">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" 
                  alt="Card Image">
               </a>
            </div>
            <div class="card-description">
               <a href="<?php echo the_permalink();?>">
                  <h3><?php echo the_title();?></h3>
               </a>
               <div class="card-meta">
                   Posted by <?php the_author(); ?> on <?php the_time('F j, Y') ?> in
                   <a href="#"><?php echo get_the_category_list(', ') ?></a>
               </div>
               <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 36);?>
               </p>
               <a href="<?php echo the_permalink();?>" class="btn-readmore">Read more</a>
            </div>
         </div>
    <?php }
        wp_reset_query(); ?>
      </section>

      <div class="pagination">
          <?php echo paginate_links(); ?>
      </div>
    <?php get_footer(); ?>
