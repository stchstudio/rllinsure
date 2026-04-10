<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<header class="page-header">
    <div class='grid-x grid-padding-x'>
        <div class='small-12 large-6 small-order-2 large-order-1 cell'>
            <?php if ( get_field('headline') ) : ?>
                <div class="headline reveal-up load-hidden">
                    <?php echo get_field('headline'); ?>
                </div>        
            <?php endif; ?>
            <?php if ( get_field('illustration') ) : $image = get_field('illustration'); ?>
                <img class="illustration" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
            <?php endif; ?>
        </div>
        <div class='small-12 large-6 small-order-1 large-order-2 cell' style="background-color: <?php the_field('form_background') ?>;">
            <?php if ( get_field('form') ) : ?>
                <div class="form reveal-up load-hidden">
                    <?php echo get_field('form'); ?>
                </div>        
            <?php endif; ?>
        </div>
    </div>
</header>

<?php get_footer();
