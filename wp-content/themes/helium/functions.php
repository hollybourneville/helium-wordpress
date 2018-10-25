<?php 

	//register resources

	function register_resources(){
		 // register a menu

			register_nav_menu('main-menu','Main Menu');

		//register a slide
		
		$arg = array(
        'labels' => array(
          'name' => 'Slides' ,
          'singular_name' => 'Slide',
          'menu_name' => 'Slides'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'slide',$arg);	

    $arg = array(
        'labels' => array(
          'name' => 'Features' ,
          'singular_name' => 'Feature',
          'menu_name' => 'Features'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'feature',$arg);	

    $arg = array(
        'labels' => array(
          'name' => 'Team' ,
          'singular_name' => 'Team',
          'menu_name' => 'Team'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'team',$arg);

    $arg = array(
        'labels' => array(
          'name' => 'Services' ,
          'singular_name' => 'Service',
          'menu_name' => 'Services'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'service',$arg); 

    $arg = array(
        'labels' => array(
          'name' => 'Projects' ,
          'singular_name' => 'Project',
          'menu_name' => 'Project'
        ),
        'public' => true,
        'show_in_nav_menues' => true,
    );
    register_post_type( 'project',$arg); 

    $arg = array(
      'label' => 'Type',
      'rewrite' => array( 'slug' => 'type' ),
      'hierarchical' => true,
    );
    register_taxonomy('type','project',$arg);

	}



	add_action('init','register_resources');

	//menu items hooks

	function add_menu_li_class($classes,$item,$args){
		$classes[] ='nav-item';
		return $classes;
	}

	add_filter('nav_menu_css_class','add_menu_li_class',10,3);

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] ='nav-link';
		return $attrs;
	}

	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);




 ?>