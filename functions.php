<?php 

add_action('after_setup_theme','theme_start');

function theme_start(){
	add_theme_support('title-tag');
	add_theme_support('custom-header',array(
		'default-image' => get_template_directory_uri().'style/banner.jpg'

	));
	add_theme_support('custom-background');
	
	
	
	
		register_nav_menus(array(
				'primary' => 'primary menu',
				));

		register_nav_menus(array(
				'footer' => 'footer menu',
				));
}



add_action('widgets_init','bluess_sidebar');

	function bluess_sidebar(){
		register_sidebar(array(

			'name'=>'bluess_sidebar',
			'id'=>'sidebar',
			'before_widget'=>'<div class="sidebar">
          					<div class="sidebar_top"></div>
          				<div class="sidebar_item">',

			'after_widget'=>'</div>
          				<div class="sidebar_base"></div>
        			</div>',

        	'before_title'=>'<h3>',
        	'after_title'=>'</h3>',
        	


		));

	}

	add_action('widgets_init','bluess_footer');

	function bluess_footer(){
		register_sidebar(array(

			'name'=>'bluess_footer',
			'id'=>'footer',
			'before_widget'=>'<div class="con">',
			'after_widget'=>'</div>',
			
		));

	}

	add_action('widgets_init','bluess_search');

	function bluess_search(){
		register_sidebar(array(

			'name'=>'bluess_search',
			'id'=>'search',
			'before_widget'=>'<div class="result22">',
			'after_widget'=>'</div>',
			
		));

	}


?>