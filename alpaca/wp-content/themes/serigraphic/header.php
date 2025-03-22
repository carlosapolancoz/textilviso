<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">

<head> 

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 

  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>          

  <?php wp_head(); ?>

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!--[if lt IE 9]>
  <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>

  <![endif]-->  
  
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>

<script language="javascript">
$(document).ready(function(){
  // Add the hover handler to the link
  $(".img_hover_trans").hover(
    function(){ // When mouse pointer is above the link
      // Make the image inside link to be transparent
      $(this).find("img").animate(
        {opacity:".7"},
        {duration:300}
      );
    },
    function(){ // When mouse pointer move out of the link
      // Return image to its previous state
      $(this).find("img").animate(
        {opacity:"1"},
        {duration:300}
      );
    }
  );
});
</script>            

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" title="no title" charset="utf-8"/>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-latest.js" type="text/javascript"></script>

  <?php if (!ereg('iPhone',$_SERVER['HTTP_USER_AGENT'])) { ?>

  <script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js" type="text/javascript"></script>

  <?php } ?>

  <?php $shortname = "serigraphic"; ?>

  <?php if(get_option($shortname.'_custom_background_color','') != "") { ?>

  <style type="text/css">

    body { background-color: <?php echo get_option($shortname.'_custom_background_color',''); ?>; }

  </style>

  <?php } ?>    

</head>

<body>



<div id="main_container">



    <div id="header">

        

        <div class="header_top">

            <?php wp_nav_menu('menu=header_menu&menu_class=header_menu&container=false&menu_id=menu'); ?>

            <div class="clear"></div>

        </div><!--//header_top-->

        

        <?php if(get_option($shortname.'_custom_logo_url','') != "") { ?>

          <div align="center"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo stripslashes(stripslashes(get_option($shortname.'_custom_logo_url',''))); ?>" class="logo" /></a></div>

        <?php } else { ?>

          <div align="center"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" class="logo" /></a></div>

        <?php } ?>    

        <div class="clear"></div>

        

        <div class="header_bottom">

        

            <div class="header_bottom_menu">

                <?php wp_nav_menu('menu=category_menu&menu_class=category_menu&container=false&menu_id=menu'); ?>

                <div class="clear"></div>

            </div><!--//header_bottom_menu-->

        

            <div class="social_header_cont">

                <ul>

                  <?php if(get_option($shortname.'_twitter_link','') != "") { ?>

                  <li><a href="<?php echo get_option($shortname.'_twitter_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/twitter-icon.jpg" /></a></li>

                  <?php } ?>

                  <?php if(get_option($shortname.'_facebook_link','') != "") { ?>

                  <li><a href="<?php echo get_option($shortname.'_facebook_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/facebook-icon.jpg" /></a></li>

                  <?php } ?>

                  <?php if(get_option($shortname.'_google_plus_link','') != "") { ?>

                  <li><a href="<?php echo get_option($shortname.'_google_plus_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/google-plus-icon.jpg" /></a></li>

                  <?php } ?>

                  <?php if(get_option($shortname.'_dribbble_link','') != "") { ?>

                  <li><a href="<?php echo get_option($shortname.'_dribbble_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/dribbble-icon.jpg" /></a></li>

                  <?php } ?>

                  <?php if(get_option($shortname.'_pinterest_link','') != "") { ?>

                  <li><a href="<?php echo get_option($shortname.'_pinterest_link',''); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/pinterest-icon.jpg" /></a></li>

                  <?php } ?>

                </ul>

                <div class="clear"></div>

            </div><!--//social_header_cont-->

            <div class="clear"></div>

        

        </div><!--//header_bottom-->

        

    </div><!--//header-->