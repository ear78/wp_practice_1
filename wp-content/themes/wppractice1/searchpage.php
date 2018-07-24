<?php
/*
Template Name: Search Page
*/
?>




<!-- Page.php is for static pages and has the same layout as index.php -->

<?php get_header(  ); ?>

<!-- primary content posts and pages -->
<div id="primary" class="content-area">

    <main id="main" class="site-main" role="main">

        <h1 style="font-size:2.5em; color: lightblue;">Search Form Page...</h1>

        <!-- getting the search form -->
        <?php get_search_form(); ?>

        <p>Template: searchpage.php</p>

    </main>


</div>


<!-- Same with the footer, you can use the string parameter to change the footer to an alternate footer -->
<?php get_footer( ); ?>