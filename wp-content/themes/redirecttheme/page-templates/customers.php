<?php
/*
Template Name: Customers
*/
get_header(); ?>


<header class="page-header">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 large-12 cell'>
                <?php if ( get_field('headline') ) : ?>
                    <div class="headline reveal-up load-hidden">
                        <?php echo get_field('headline'); ?>
                    </div>        
                <?php endif; ?>
            </div>
            <div class='small-12 large-3 cell'>
                
            </div>
        </div>
    </div>
</header>
<?php if ( get_field('headline') ) : ?>
    <section class="training">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 cell reveal-up load-hidden'>
                <?php echo get_field('training'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php get_footer();
