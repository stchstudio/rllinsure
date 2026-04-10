<?php
/*
Template Name: Webinar
*/
get_header(); ?>

<?php if ( get_field('webinar') ) : ?>
    <section class="webinar">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell'>
                    <div class="reveal-up load-hidden">
                        <div class="responsive-embed widescreen">
                            <?php 
                            $webinar_embed = get_field('webinar');
                            // Add autoplay parameters to any Vimeo URL
                            $autoplay_embed = preg_replace('/src="([^"]*)"/', 'src="$1&autoplay=1&muted=1"', $webinar_embed);
                            echo $webinar_embed;
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( get_field('offer') ) : ?>
    <section class="offer">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell'>
                    <div class="reveal-up load-hidden">
                        <?php echo get_field('offer'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( get_field('foreground') ) : $image = get_field('foreground'); ?>
            <img class="foreground" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
        <?php endif; ?>
    </section>
<?php endif; ?>


<?php get_footer(); ?>