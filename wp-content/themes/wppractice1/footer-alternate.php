<style>
    footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        color: white;
        display: flex;
        justify-content: center;
        padding: 20px;
        font-weight: 200;
    }

    .footer-copy {
        font-size: .7em;
        margin-top: 4px;
        margin-left: 5px;
        text-transform: uppercase;
    }

</style>

    <footer>
        Fullpage Template By: <span class="footer-copy">
           Elliot Richardson &copy; <?php echo get_the_date('Y'); ?>
        </span>

    </footer>

    </div><!-- #content -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
    jQuery(document).ready(function(){
        var isMenuActive = false;
        jQuery('#close-nav, #hamburger').on('click', function(){
            isMenuActive = !isMenuActive;
            isMenuActive ? jQuery('#fullpage-nav').addClass('active') : jQuery('#fullpage-nav').removeClass('active');
        })
    })
</script>
</body>

</html>
