<?php

/*
 * Template Name: Full Page
 */

?>

<!-- Full Page Template -->

<?php get_header('alternate'); ?>

    <div class="fullpage-container">

        <!-- LOOP TO DISPLAY DYNAMIC CONTENT ONTO THE PAGE, POSTS OR PAGES -->
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <!-- Get the content from CMS -->
                <?php the_content(); ?>

        <?php endwhile; else : ?>

            <!-- If no content found 404 error page -->
            <?php get_template_part( '/template-parts/content', '404'); ?>

        <?php endif; ?>

    </div>


<?php get_footer('alternate'); ?>