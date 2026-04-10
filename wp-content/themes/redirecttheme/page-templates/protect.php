<?php
/*
Template Name: Protect
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
                <?php if ( have_rows('stats') ) : ?>
                    <ul class="menu stats">
                        <?php while( have_rows('stats') ) : the_row(); ?>
                            <li class="stat reveal-up load-hidden"><?php the_sub_field('stat'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <div class='small-12 large-3 cell'>
                <?php get_template_part( 'template-parts/greeter'); ?>
            </div>
        </div>
    </div>
</header>

<?php if ( get_field('main_left') ) : ?>
    <section class="main">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 large-9 reveal-up load-hidden cell'>
                    <?php echo get_field('main_left'); ?>
                </div>
                <?php if ( get_field('main_right') ) : ?>
                    <div class='small-12 large-3 reveal-up load-hidden cell'>
                        <?php echo get_field('main_right'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    
<?php endif; ?>


<?php get_footer();
