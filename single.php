
	
	<?php get_header();?>
	
  <div id="content_header"></div>

    <div id="site_content">
      <div id="banner"></div>
      <?php //get_sidebar(); ?>
     
	  
	  
	  
      <div id="content">

        <?php while(have_posts()):the_post();?>
         <div class="Blog-post" style="margin-bottom: 12px; ">
           <h2><?php the_title();?></h2>
           <h4><div><?php comments_number();?></div></h4>

           <p><?php the_content();?></p>
           <?php the_post_thumbnail( 'thumbnail' );?>
           
           
         </div>
            
              <?php
                $comments = get_comments(array(
                  'status' => 'approve' 
                ));
                wp_list_comments(array(
                  'per_page' => 10, 
                  'reverse_top_level' => false
                ), $comments);
              ?>
           

         <?php comment_form(); ?>
       <?php endwhile;?> 

      </div>
    </div>
  <div id="content_footer"></div>

	
	<?php get_footer(); ?>

 