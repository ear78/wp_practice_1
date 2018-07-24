

<!-- Page.php is for static pages and has the same layout as index.php -->

<?php get_header(  ); ?>

<style>
    .search-results-container {
        background: white;
        width: 95%;
        margin: 50px auto;
        padding: 20px;
        box-shadow: inset 0 0 5px rgba(0,0,0,.1);
        border-radius: 2px;
        border: 1px solid gainsboro;
    }

    .search-post-link a {
        color: #BA2D0B;
        font-style: italic;
        font-size: .85em;
    }

    .line {
        width: 35%;
        height: 1px;
        background: gainsboro;
        margin: 0 0 30px;
    }
</style>
<!-- primary content posts and pages -->
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">
        <div class="search-results-container">
            <?php while ( have_posts() ) : the_post(); ?>
                <h2 class="search-post-title"><?php the_title(); ?></h2>
                <br>
                <span class="search-post-excerpt"><?php the_excerpt(); ?></span>
                <br>
                <span style="display: block; margin-bottom: 15px;" class="search-post-link"><a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></span>
                <br>
                <div class="line"></div>
            <?php endwhile; ?>
        </div>

        <p>Template: search.php</p>

    </main>


</div>

<!-- gets the sidebar dynamically can take a dynamic custom name like footer/headers -->
<?php get_sidebar( 'page' ); ?>

<!-- Same with the footer, you can use the string parameter to change the footer to an alternate footer -->
<?php get_footer( ); ?>