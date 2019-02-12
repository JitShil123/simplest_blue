<?php get_header(); ?>

 <div id="site_content">
     <?php get_sidebar(); ?>

      <div id="content">
        <!-- insert the page content here -->
        <?php while(have_posts()):the_post() ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>

    	<?php endwhile;?>
      </div>
    </div>
 <?php get_footer(); ?>