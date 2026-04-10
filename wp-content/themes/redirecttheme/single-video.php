<?php
get_header(); ?>

<header class="pseudo-header">
    <img class="slant green" src="https://rllinsure.com/wp-content/uploads/2025/03/rll_homepage_green_slant2.svg" />
    <img class="slant blue" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/dark_bluesvg.svg" />
</header>


<?php if ( get_field('video') ) : ?>
    <section class="video">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 large-10 large-offset-1 cell'>
                    <div class="responsive-embed widescreen">
                        <?php echo get_field('video'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="pseudo-footer"></div>
    </section>
<?php endif; ?>  





<?php get_footer();
