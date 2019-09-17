<?php get_header(); ?>
    <h2 class="page-heading">Search results for <?php echo get_search_query();?></h2>

    <?php if(have_posts()) { ?>
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
                   Posted by <?php the_author(); ?> on <?php the_time('F j, Y') ?>
                   <?php if(get_post_type() == 'post') { ?>
                    in&nbsp;<a href="#"><?php echo get_the_category_list(', ') ?></a>
                   <?php } ?>
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

                   <?php } else { ?>
                    <div class="no-results">
                        <h2>Could not find anything:( Did you mistype something?</h2>
                        <h3>Don't worry</h3>
                        <h3>Check out the following links:</h3>
                        <ul>
                            <li><a href="<?php echo site_url('/blog')?>">Tutorials</a></li>
                            <!-- <li><a href="<?php echo site_url('/products')?>">Products</a></li> -->
                            <!-- <li><a href="<?php echo site_url('/about')?>">About</a></li> -->
                            <li><a href="<?php echo site_url('/')?>">Homepage</a></li>
                        </ul>
                    </div>
                   <?php } ?>

      <div class="pagination">
          <?php echo paginate_links(); ?>
      </div>
    <?php get_footer(); ?>
