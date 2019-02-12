
    



    <div id="content_footer">
    <div id="footer">
    	 <?php wp_nav_menu(array(
	    	'theme_location'=>'footer',
	    	'menu_id' => 'footer',

	    )); ?>


	    
      		
      		<?php dynamic_sidebar('footer');?>
      

    </div>
  </div>

	
  <?php wp_footer();?>
</body>
</html>
