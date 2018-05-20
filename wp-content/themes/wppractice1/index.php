
<!-- you can set a special page to load and if it doesn't find it, it will default back to the normal header.php file -->

<?php //get_header( 'alternate' ); ?>
<?php get_header(  ); ?>

    <!-- primary content posts and pages -->
    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">

                    <h1>Index.php</h1>

                </header>

                <div class="entry-content">

                    <p>Lorem.</p>

                </div>

            </article>

            <?php dynamic_sidebar('content-sidebar'); ?>

        </main>


    </div>

    <!-- gets the sidebar dynamically can take a dynamic custom name like footer/headers -->
    <?php get_sidebar(  ); ?>

<!-- Same with the footer, you can use the string parameter to change the footer to an alternate footer -->
<?php get_footer( ); ?>
