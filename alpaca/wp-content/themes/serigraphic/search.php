<?php get_header(); ?>
    
    <div class="home_big_post_cont">
    
    <?php
    global $wp_query;
    //$args = array_merge( $wp_query->query, array( 'posts_per_page' => 6 ) );
    $args = array_merge( $wp_query->query, array( 'posts_per_page' => 9 ) );
    query_posts( $args );
  
    $x = 0;

    while (have_posts()) : the_post(); ?>                    
    
        <?php if($x == 2 || $x == 5 || $x == 8) { ?>
        <div class="home_big_box home_big_box_last">
        <?php } else { ?>
        <div class="home_big_box">
        <?php } ?>
        
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('home-big-image'); ?></a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php echo ds_get_excerpt('175'); ?></p>
        </div><!--//home_big_box-->    
        
        <?php if($x == 2) { ?>
            <div class="clear"></div></div><div class="home_big_post_cont">
        <?php } ?>
        
        <?php if($x == 5) { ?>
            <div class="clear"></div></div><div class="home_big_post_cont">
        <?php } ?>
        
        <?php if($x == 8) { ?>
            <div class="clear"></div></div>
        <?php } ?>        
    
    <?php $x++; ?>
    <?php endwhile; ?>
    
    <?php if($x < 2) { //closing for 1st cont ?>
        <div class="clear"></div></div>
    <?php } ?>
    
    <?php if($x < 5 && $x > 3) { //closing for 2nd cont ?>
        <div class="clear"></div></div>
    <?php } ?>
    
    <?php if($x < 8 && $x > 6) { //closing for 3rd cont ?>
        <div class="clear"></div></div>
    <?php } ?>    
    
    <div class="clear"></div>
    
    <div class="blog_nav">
        <div class="left"><?php previous_posts_link('&lt; &lt; Previous') ?></div>
        <div class="right"><?php next_posts_link('Next &gt; &gt;') ?></div>
        <div class="clear"></div>
    </div><!--//blog_nav-->    
    
    <?php wp_reset_query(); ?>                    
    
<?php get_footer(); ?>                        