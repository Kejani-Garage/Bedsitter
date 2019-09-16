<?php get_header(); ?>
    <div class="container-404">
        <h2 class="page-heading">Oh! What?? 404</h2>
        <img src="http://source.unsplash.com/640x480/?cats">
        
        <h3>Sorry friend, I think you're lost. Please try the following links.</h3>
        <ul>
            <li><a href="<?php echo site_url('/blog')?>">Blog List</a></li>
            <li><a href="<?php echo site_url('/products')?>">Products</a></li>
            <li><a href="<?php echo site_url('/about')?>">About</a></li>
            <li><a href="<?php echo site_url('/')?>">Home Page</a></li>
        </ul>
    </div>

<?php get_footer(); ?>
