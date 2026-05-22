<?php
/*
Template Name: NOI
*/
get_header(); ?>

<div class="money">
    <div class="money__left">
        <img src="https://rllinsure.com/wp-content/uploads/2026/05/money_left.png" alt="">
    </div>
    <div class="money__right">
        <img src="https://rllinsure.com/wp-content/uploads/2026/05/moneyright.png" alt="">
    </div>
</div>

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

<?php if ( get_field('form') ) : ?>
    <section class="form">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 large-8 cell'>
                    <div class="form__body">
                        <?php echo get_field('form'); ?>
                    </div>
                </div>
                <div class='small-12 large-4 cell'>
                    <?php if ( get_field('toolbox') ) : $image = get_field('toolbox'); ?>
                        <div class="form__toolbox">
                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <img class="foreground" src="https://rllinsure.com/wp-content/uploads/2026/05/RLLmoneywoman.png" />
    </section>
<?php endif; ?>





<?php get_footer();
