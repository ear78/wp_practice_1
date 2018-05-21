
<?php get_header(  ); ?>

<!-- primary content posts and pages -->
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <!-- LOOP TO DISPLAY DYNAMIC CONTENT ONTO THE PAGE, POSTS OR PAGES -->
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <!-- utilize template parts to load in template -->
            <?php get_template_part( '/template-parts/content', 'page'); ?>

        <?php endwhile; else : ?>

            <!-- If no content found 404 error page -->
            <?php get_template_part( '/template-parts/content', '404'); ?>

        <?php endif; ?>

        <p>Template: front-page.php</p>

    </main>


</div>