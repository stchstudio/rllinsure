<?php
/*
Template Name: Contact
*/
get_header(); ?>

<header class="page-header">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 large-9 cell'>
                <?php if ( get_field('headline') ) : ?>
                    <div class="headline reveal-up load-hidden">
                        <?php echo get_field('headline'); ?>
                    </div>        
                <?php endif; ?>
                <?php if ( get_field('form') ) : ?>
                    <div class="form reveal-up load-hidden">
                        <?php echo get_field('form'); ?>
                    </div>        
                <?php endif; ?>
            </div>
            <div class='small-12 large-3 cell'>
                <?php if ( get_field('contact') ) : ?>
                    <div class="contact reveal-up load-hidden">
                        <?php echo get_field('contact'); ?>
                    </div>        
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<?php get_footer();
