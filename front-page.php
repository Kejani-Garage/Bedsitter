<?php get_header(); ?>
   <div id="banner">
      <h1>&lt;Bedsitter_iO/&gt;</h1>
      <h3>When you learn, teach, </h3>
      <h3>when you get, give.<h3>
   </div>
   <main>
      <a href="<?php echo site_url('/blog'); ?>">
         <h2 class="section-heading">Latest Tutorials</h2>
      </a>
      <section>
      <?php 

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8,
        );

        $blogposts = new WP_Query($args);

        while ($blogposts->have_posts()) {
            $blogposts->the_post();
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
               <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 36);?>
               </p>
               <a href="<?php echo the_permalink();?>" class="btn-readmore">Read more</a>
            </div>
         </div>
    <?php }
        wp_reset_query(); ?>
      </section>
      <!-- <h2 class="section-heading">All Projects</h2>
      <section>
      <?php 
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 2,
        );

        $products = new WP_Query($args);

        while ($products->have_posts()) {
            $products->the_post();
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
               <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 36);?>
               </p>
               <a href="<?php echo the_permalink();?>" class="btn-readmore">Read more</a>
            </div>
        </div>
        <?php }
            wp_reset_query();
        ?>
      </section> -->
      <h2 class="section-heading">Source Code</h2>
      <section id="section-source">
         <p>
            Source code for all the tutorials are a stored in the following Github organization/repository.
         </p>
         <a href="https://github.com/bedsitter-io" class="btn-readmore">Bedsitter iO Github Repositories</a>
      </section>
    <?php get_footer(); ?>
