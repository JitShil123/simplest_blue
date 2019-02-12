
	
	<?php get_header();?>
	
  <div id="content_header"></div>

    <div id="site_content">
      <div id="banner" style= "background: transparent url(<?php header_image(); ?>) no-repeat;"></div>

      <?php get_sidebar(); ?>
     
	  
	  
	  
      <div id="content">

        <?php while(have_posts()):the_post();?>
         <div class="Blog-post" style="margin-bottom: 12px; border: 1px solid #3c6382; padding:10px;">
           <h2><?php the_title();?></h2>
           <h4><div>Date: <?php the_time('d-m-Y  g:i:s');?>__<?php the_author();?>__<?php comments_number();?></div></h4>

           <p><?php //the_content();?></p>
           <?php echo wp_trim_words(get_the_content(),'20','')?>
           <a href="<?php the_permalink();?>">Read More</a>
         </div>
        <?php endwhile;?> 

      </div>
    </div>
  <div id="content_footer"></div>

	
	<?php get_footer(); ?>

 