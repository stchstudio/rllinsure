<?php
/*
Template Name: Simple
*/
get_header(); ?>

<header class="page-header">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 cell'>
                <?php if ( get_field('headline') ) : ?>
                    <div class="headline reveal-up load-hidden">
                        <?php echo get_field('headline'); ?>
                    </div>        
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<?php if ( get_field('main') ) : ?>
<section class="main">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 reveal-up load-hidden cell'>
                <?php echo get_field('main'); ?>
             
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer() ?>