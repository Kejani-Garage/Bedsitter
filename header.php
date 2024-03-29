<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
   <?php wp_head(); ?>

   <title>Bedsitter iO</title>
</head>

<body>
   <div id="slideout-menu">
      <ul>
         <li>
            <a href="<?php echo site_url(''); ?>">Home</a>
         </li>
         <li>
            <a href="<?php echo site_url('/blog'); ?>">Tutorials</a>
         </li>
         <!-- <li>
            <a href="<?php echo site_url('/products'); ?>">Shop</a>
         </li> -->
         <!-- <li>
            <a href="<?php echo site_url('/about'); ?>">About</a>
         </li> -->
         <div class="searchbox-slide-menu">
             <?php echo get_search_form();?>
         </div>
      </ul>
   </div>
   </div>
   <nav> 
      <div id="logo-img">
         <a href="<?php echo site_url(''); ?>">
            <p>Bedsitter iO <sup>alpha</sup></p>
         </a>
        </a>
      </div>
      <div id="menu-icon">
         <i class="fas fa-bars"></i>
      </div>
      <ul>
         <li>
            <a href="<?php echo site_url(''); ?>"
                <?php if(is_front_page()) echo 'class="active"'?>
            >Home</a>
         </li>
         <li>
            <a href="<?php echo site_url('/blog'); ?>"
                <?php if(get_post_type() == 'post') echo 'class="active"'?>
            >Tutorials</a>
         </li>
         <!-- <li>
            <a href="<?php echo site_url('/products'); ?>"
                <?php if(get_post_type() == 'product') echo 'class="active"'?>
            >Shop</a>
         </li> -->
         <!-- <li>
            <a href="<?php echo site_url('/about'); ?>"
                <?php if(is_page('about') == 'post') echo 'class="active"'?>
            >About</a>
         </li> -->
         <li>
            <div id="search-icon">
               <i class="fas fa-search"></i>
            </div>
         </li>
      </ul>
   </nav>
   <div id="searchbox">
        <?php echo get_search_form();?>
   </div>

   <?php if(!is_front_page()){?>
    <main>
   <?php }?>