<?php
/*
Template Name: NOI
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

<?php if ( get_field('form') ) : ?>
    <section class="noi-form">
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
    </section>
<?php endif; ?>





<?php get_footer();
