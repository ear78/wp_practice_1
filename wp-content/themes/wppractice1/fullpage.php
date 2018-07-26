<?php

/*
 * Template Name: Full Page
 */

?>

<style>

    .page-template-fullpage {
        overflow: hidden;
    }

    .site-branding {
        display: none;
    }

    .fullpage-container {
        background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)),
        url("http://localhost:8888/wp_practice_1/wp-content/uploads/2018/07/martin-jernberg-197949-unsplash.jpg") no-repeat;
        background-size: cover;
        height: 100vh;
        background-position: 50% 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        color: white;
    }

    .fullpage-container h1 {
        font-size: 4em;
        margin-bottom: 10px;
    }

    .fullpage-container p {
        font-weight: 200;
    }

    .fullpage-container span {
        margin: 20px auto 110px;
    }

    .fullpage-container .dashicons, .fullpage-container .dashicons-before:before {
        width: 60px;
        height: 60px;
        font-size: 60px;
    }

</style>

<?php get_header('alternate'); ?>


    <div class="fullpage-container">

<!--        <h1 class="fullpage-title">FullPage</h1>-->
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