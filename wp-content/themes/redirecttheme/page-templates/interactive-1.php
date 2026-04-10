<?php
/*
Template Name: Interactive Lead Gen 1
*/
get_header(); ?>


<?php if ( get_field('headline') ) : ?>
    <section class="headline">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell'>
                    <div class="headline__block">
                        <?php echo get_field('headline'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="animation">
    <div class='grid-container'>
        <div class='grid-x'>
            <div class="small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell">
                <div class="animation__container__triggers text-center">
                    <button class="button animation__container__inner__1__trigger">1</button>
                    <button class="button animation__container__inner__2__trigger">2</button>
                    <button class="button animation__container__inner__3__trigger">3</button>
                </div>
            </div>
            <div class='small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell'>
                <?php if ( have_rows('animations') ) : ?>
                    <div class="animation__container">
                        <?php $i = 0; ?>
                        <?php while( have_rows('animations') ) : the_row(); ?>
                            <?php $i++; ?>
                            <?php if ( get_sub_field('animation') ) : ?>
                                <div class="animation__container__inner animation__container__inner__<?php echo $i ?>" id="animation__container__inner__<?php echo $i ?>" data-animation="<?php echo get_sub_field('animation'); ?>"></div>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ( get_field('popup') ) : ?>
                <div class="small text-center reveal lead-gen-interactive-reveal" id="successPopup" data-reveal data-close-on-click="false" data-close-on-esc="false" data-animation-in="fadeIn">
                    <?php echo get_field('popup'); ?>
                    <button class="button" data-open="successForm">Watch Webinar!</button>
                </div>
            <?php endif; ?>
            <?php if ( get_field('form') ) : ?>
                <div class="small reveal text-center lead-gen-interactive-reveal" id="successForm" data-reveal data-close-on-click="false" data-close-on-esc="false" data-animation-in="fadeIn">
                    <?php echo get_field('form'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <img class="foreground" src="https://rllinsure.com/wp-content/uploads/2024/07/Rabbit.svg" alt="">
</section>




<?php get_footer();
