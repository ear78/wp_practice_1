



        </div><!-- #content -->

        <footer id="colophon" class="site-footer">
            This is the footer section
            <a href="<?php echo esc_url('https://wordpress.org','wppractice1'); ?>">
                <?php printf( esc_html__( 'Proudly powered by %s', 'wppractice1'), 'Wordpress'); ?>)
            </a>
        </footer>

    </div> <!-- #page -->

        <?php wp_footer(); ?> <!-- grabbing any scripts loaded in footer -->
</body>

</html>
