<?php get_header(); ?>
   <div id="banner">
      <h1>&lt;Bedsitter/&gt;</h1>
      <h3>Learn coding from scratch</h3>
   </div>
   <main>
      <a href="<?php echo site_url('/blog'); ?>">
         <h2 class="section-heading">All Blogs</h2>
      </a>
      <section>
      <?php 

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
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
      <h2 class="section-heading">All Projects</h2>
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
      </section>
      <h2 class="section-heading">Source Code</h2>
      <section id="section-source">
         <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.
         </p>
         <a href="#" class="btn-readmore">Github Profile</a>
      </section>
    <?php get_footer(); ?>
