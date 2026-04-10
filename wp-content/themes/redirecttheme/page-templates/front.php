<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php 

$rows = get_field('greeters', 'option' );
if( $rows ) {
    $index = array_rand( $rows );
    $rand_row = $rows[ $index ];
    $rand_greeting = $rand_row['greeting'];
    $rand_image = $rand_row['image'];
} ?>

<header class="front-header">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 large-5 small-order-2 large-order-1 cell'>
                <div class="greeter-image">
                    <?php if($rand_image): ?>
                        <img src="<?php echo esc_url($rand_image['url']); ?>" alt="<?php echo esc_attr($rand_image['alt']); ?>">
                    <?php endif; ?>
                </div>
            </div>
            <div class='small-12 large-7 small-order-1 large-order-2 cell'>
                <?php if ( get_field('headline') ) : ?>
                    <div class="headline reveal-up load-hidden">
                        <?php echo get_field('headline'); ?>
                    </div>        
                <?php endif; ?>
            </div>
        </div>
    </div>
    <img class="slant green" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/rll_homepage_green_slant.svg" />
    <img class="slant blue" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/dark_bluesvg.svg" />
</header>

<?php if ( get_field('form') ) : ?>
    <section class="lead-form reveal-up load-hidden">
        <button class="close-button">
            <img src="https://rllinsure.com/wp-content/uploads/2022/10/X.svg" alt="">
        </button>
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 large-9 cell'>
                    <?php echo get_field('form'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_field('intro') ) : ?>
    <section class="intro">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 large-5 cell'>
                    <div class="greeting grid-x grid-padding-x">
                        <div class="small-12 large-3 cell">
                            <div class="greeter-wave reveal-up load-hidden">
                                <img src="https://rllinsure.com/wp-content/uploads/2022/08/Wave.gif" />
                            </div>
                        </div>
                        <div class="small-12 large-9 cell">
                            <div class="greeter-greeting reveal-up load-hidden">
                                <?php echo $rand_greeting ?>
                            </div>
                        </div>
                    </div>
                    <?php if ( get_field('video') ) : ?>
                        <div class="video-container reveal-up load-hidden">
                            <?php if ( get_field('video_headline') ) : ?>
                                <?php echo get_field('video_headline'); ?>
                            <?php endif; ?>
                            <div class="video">
                                <div class="responsive-embed widescreen">
                                    <?php echo get_field('video'); ?>
                                </div>
                            </div>     
                        </div>
                    <?php endif; ?>
                </div>
                <div class='small-12 large-7 cell'>
                    <div class="reveal-up load-hidden">
                        <?php echo get_field('intro'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>    
<?php endif; ?>

<?php if ( have_rows('why') ) : ?>
    <section class="why-container">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 cell'>
                    <h3 class="text-center reveal-up load-hidden">Why is RLL Right for You? </h3>
                    <ul class="menu why align-center">
                        <?php while( have_rows('why') ) : the_row(); ?>
                            <li class="block reveal-up load-hidden"><?php the_sub_field('block'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_field('for') ) : ?>
    <section class="for">
        <img class="slant" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/rll_tanslant_homepage.svg" />
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 large-8 small-order-2 large-order-1 cell'>
                    <div class="reveal-up load-hidden">
                        <?php echo get_field('for'); ?>
                    </div>
                </div>  
                <div class='small-12 large-4 small-order-1 large-order-2 cell'>
                    <img class="character reveal-up load-hidden" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/RLL_homepage_floating.svg" />
                </div>
            </div>
        </div>
    </section>    
<?php endif; ?>


<?php get_footer();
