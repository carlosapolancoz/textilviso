<?php



include('settings.php');



if (function_exists('add_theme_support')) {

	add_theme_support('menus');

}



function get_category_id($cat_name){

	$term = get_term_by('name', $cat_name, 'category');

	return $term->term_id;

}



if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9



  add_theme_support( 'post-thumbnails' );

  add_image_size('home-big-image',300,325,true);

  add_image_size('home-small-image',219,166,true);

  add_image_size('blog-image',612,265,true);



}



if ( function_exists('register_sidebar') ) {

        register_sidebar(array(

                'name'=>'Sidebar',

		'before_widget' => '<div class="side_box">',

		'after_widget' => '</div>',

		'before_title' => '<h3 class="side_title">',

		'after_title' => '</h3>',

	));

}







function catch_that_image() {



  global $post, $posts;



  $first_img = '';

  ob_start();

  ob_end_clean();

  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);

  $first_img = $matches [1] [0];



  if(empty($first_img)){ //Defines a default image

    $first_img = "/images/post_default.png";

  }



  return $first_img;



}





function ds_get_excerpt($num_chars) {



    $temp_str = substr(strip_tags(get_the_content()),0,$num_chars);

    $temp_parts = explode(" ",$temp_str);

    $temp_parts[(count($temp_parts) - 1)] = '';

    

    if(strlen(strip_tags(get_the_content())) > 125)

      return implode(" ",$temp_parts) . '...';

    else

      return implode(" ",$temp_parts);



}



// **** PRODUCTION - Template1 Search START ****



class template1_search extends WP_Widget {



	function template1_search() {

		parent::WP_Widget(false, 'Serigraphic Search');

	}



	function widget($args, $instance) {

                $args['search_title'] = $instance['search_title'];

		t1_func_search($args);

	}



	function update($new_instance, $old_instance) {

		return $new_instance;

	}



	function form($instance) {

                $search_title = esc_attr($instance['search_title']);

?>

                <p><label for="<?php echo $this->get_field_id('search_title'); ?>"><?php _e('Title:'); ?> <input class="widefat" id="<?php echo $this->get_field_id('search_title'); ?>" name="<?php echo $this->get_field_name('search_title'); ?>" type="text" value="<?php echo $search_title; ?>" /></label></p>

<?php

	}

 }

function t1_func_search($args = array(), $displayComments = TRUE, $interval = '') {



	global $wpdb;



        echo $args['before_widget']; 

        

        if($args['search_title'] != '')

            echo $args['before_title'] . $args['search_title'] . $args['after_title']; ?>



        <div class="t1_search_cont">

            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">

            <input type="text" name="s" id="s" />

            <INPUT TYPE="image" SRC="<?php bloginfo('stylesheet_directory'); ?>/images/search-icon.jpg" class="t1_search_icon" BORDER="0" ALT="Submit Form">

            </form>

        </div><!--//t1_search_cont-->



        <?php

        echo $args['after_widget'];

        wp_reset_query();

        



}

register_widget('template1_search');  



// **** PRODUCTION - Template1 Search END ****

?>