<?php get_header(); ?>

    

    <div class="home_big_post_cont">

    

        <?php

        $exclude_arr = array();

        $category_ID = get_category_id('blog');

        $args = array(

                     'post_type' => 'post',

                     'cat' => '-' . $category_ID,

                     'posts_per_page' => 3

                     );              

        query_posts($args);

        $x = 0;

    

        while (have_posts()) : the_post(); ?>                

    

            <?php if($x == 2) { ?>

            <div class="home_big_box home_big_box_last">

            <?php } else { ?>

            <div class="home_big_box">

            <?php } ?>

            

                <a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('home-big-image'); ?></a>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                <p><?php echo ds_get_excerpt('150'); ?></p>

            </div><!--//home_big_box-->

        

        <?php array_push($exclude_arr,get_the_ID()); ?>

        <?php $x++; ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>                

        

        <div class="clear"></div>

    

    </div><!--//home_big_post_cont-->

    

    <div class="home_small_post_cont">

    

        <div class="home_small_box_title">

            <h3>Recent Projects</h3>

            <p>Most recent projects created ...</p>

        </div><!--//home_small_box_title-->

        

        <?php

        $args = array(

                     'post_type' => 'post',

                     'cat' => '-' . $category_ID,

                     'offset' => 3,

                     'posts_per_page' => 3

                     );              

        query_posts($args);

        $x = 0;

    

        while (have_posts()) : the_post(); ?>                        

        

        <?php if($x == 2) { ?>

        <div class="home_small_box home_small_box_last">

        <?php } else { ?>

        <div class="home_small_box">

        <?php } ?>        

    

        

            <a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('home-small-image'); ?></a>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php echo ds_get_excerpt('30'); ?></p>

        </div><!--//home_small_box-->

        

        <?php array_push($exclude_arr,get_the_ID()); ?>

        <?php $x++; ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>                        

        

        <div class="clear"></div>

    

    </div><!--//home_small_post_cont-->

    

    <div class="home_small_post_cont">

    

        <div class="home_small_box_title">

            <h3>Latest Blog Posts</h3>

            <p>Recently published blog posts ...</p>

        </div><!--//home_small_box_title-->

    

        <?php

        $args = array(

                     'category_name' => 'blog',

                     'post_type' => 'post',

                     'posts_per_page' => 3

                     );              

        query_posts($args);

        $x = 0;

    

        while (have_posts()) : the_post(); ?>                        

        

        <?php if($x == 2) { ?>

        <div class="home_small_box home_small_box_last">

        <?php } else { ?>

        <div class="home_small_box">

        <?php } ?>        

    

        

            <a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('home-small-image'); ?></a>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php echo ds_get_excerpt('30'); ?></p>

        </div><!--//home_small_box-->

        

        <?php $x++; ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>                        

        

        <div class="clear"></div>

    

    </div><!--//home_small_post_cont-->    

    

    <div class="home_small_post_cont">

    

        <div class="home_small_box_title">

            <h3>Random Projects</h3>

            <p>Random portfolio work ...</p>

        </div><!--//home_small_box_title-->

    

        <?php

        $args = array(

                     'post_type' => 'post',

                     'orderby' => 'rand',

                     'cat' => '-' . $category_ID,

                     'post__not_in' => $exclude_arr,

                     'posts_per_page' => 3

                     );              

        query_posts($args);

        $x = 0;

    

        while (have_posts()) : the_post(); ?>                        

        

        <?php if($x == 2) { ?>

        <div class="home_small_box home_small_box_last">

        <?php } else { ?>

        <div class="home_small_box">

        <?php } ?>        

    

        

            <a href="<?php the_permalink(); ?>"class="img_hover_trans"><?php the_post_thumbnail('home-small-image'); ?></a>

            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            <p><?php echo ds_get_excerpt('30'); ?></p>

        </div><!--//home_small_box-->

        

        <?php $x++; ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>                        

        

        <div class="clear"></div>

    

    </div><!--//home_small_post_cont-->    

    

<?php get_footer(); ?>                        