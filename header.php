<!DOCTYPE HTML>
<html>

<head>
  
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  

  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?> /style/style.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri();?>" />

  <?php wp_head();?>
  </head>
 
<body <?php body_class();?>>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="<?php echo home_url();?>"><span class="logo_colour"><?php bloginfo('name'); ?></span></a></h1>
          <h2><?php bloginfo('description');?></h2>
        </div>
      </div>
	  
	  
      <div id="menubar">
        
		<?php wp_nav_menu(array(
			'theme_location' => 'primary',
		  'menu_id' => 'menu',
			'menu_class' => 'selected',
      
		));?>
      </div>
    </div>