<?php
/*
Template Name: Captive
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

<header class="captive-header">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
        <div class='small-12 large-8 cell'>
                <?php if ( get_field('headline') ) : ?>
                    <div class="headline reveal-up load-hidden">
                        <?php echo get_field('headline'); ?>
                    </div>        
                <?php endif; ?>
            </div>
            <div class='small-12 large-4 cell'>
                <div class="illustration">
                    <img src="https://rllinsure.com/wp-content/uploads/2023/07/rll_captivecoin.svg" alt="RLL Captive Illustration">
                </div>
            </div>

        </div>
    </div>
    <img class="slant green" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/rll_homepage_green_slant.svg" />
    <img class="slant blue" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/dark_bluesvg.svg" />
</header>

<?php if ( get_field('intro') ) : ?>
    <section class="intro">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 reveal-up load-hidden cell'>
                    <?php echo get_field('intro'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_field('learn_more') ) : ?>
    <section class="learn-more">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 reveal-up load-hidden cell'>
                    <?php echo get_field('learn_more'); ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( have_rows('about') ) : ?>
    <section class="about">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 cell'>
                    <ul class="menu align-center">
                        <?php while( have_rows('about') ) : the_row(); ?>
                            <?php if ( get_sub_field('block') ) : ?>
                                <li class="about__block reveal-up load-hidden">
                                    <?php echo get_sub_field('block'); ?>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( have_rows('one_sheet') ) : ?>
    <?php while( have_rows('one_sheet') ) : the_row(); ?>
        <section class="one-sheet">
            <div class='grid-container'>
                <div class='grid-x'>
                    <div class='small-12 large-2 large-offset-2 cell'>
                        <?php if ( get_sub_field('thumbnail') ) : $image = get_sub_field('thumbnail'); ?>
                            <img class="reveal-up load-hidden" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>           
                    </div>
                    <div class='small-12 large-8 cell'>
                        <?php if ( get_sub_field('download') ) : ?>
                            <div class="download reveal-up load-hidden">
                                <?php echo get_sub_field('download'); ?>
                            </div>        
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows('renters') ) : ?>
    <section class="renters">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class="small-12 reveal-up load-hidden cell">
                    <h3>Benefits of a Successful Renter's Program</h3>
                </div>
                <?php while( have_rows('renters') ) : the_row(); ?>
                    <div class='small-12 large-6 cell'>
                        <?php if ( get_sub_field('block') ) : ?>
                            <div class="renters__block reveal-up load-hidden">
                                <?php echo get_sub_field('block'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_field('liability') ) : ?>
    <section class="liability">
        <img class="slant" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/rll_tanslant_homepage.svg" />
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 large-6 small-order-2 large-order-1 cell'>
                    <div class="reveal-up load-hidden">
                        <?php echo get_field('liability'); ?>
                    </div>
                </div>  
                <div class='small-12 large-6 small-order-1 large-order-2 cell'>
                    <img class="character reveal-up load-hidden" src="https://rllinsure.com/wp-content/uploads/2023/07/rll_floating_captiveperson.svg" />
                </div>
            </div>
        </div>
    </section>    
<?php endif; ?>

<?php get_footer(); ?>