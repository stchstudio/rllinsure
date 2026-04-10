<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
    <header class="page-header">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 cell'>
                    <div class="headline reveal-up load-hidden">
                        <h1><?php the_title(); ?></h1>
                        <?php if ( get_field('author') ) : ?>
                            <h4>Written By <?php echo get_field('author'); ?></h4>
                        <?php endif; ?>
                    </div>        
                </div>
            </div>
        </div>
    </header>

    <?php if ( get_field('main') ) : ?>
        <section class="main">
            <div class='grid-container'>
                <div class='grid-x grid-padding-x'>
                    <div class='small-12 large-8 small-order-2 large-order-1 reveal-up load-hidden cell'>
                        <?php echo get_field('main'); ?>
                        <div class="back show-for-large">
                            <a class="reveal-up load-hidden" href="<?php echo site_url(); ?>/blog/">Back to All Blogs</a>
                        </div>
                    </div>
                    <div class='small-12 large-4 small-order-1 large-order-2 cell'>
                    <?php if ( get_field('featured_image') ) : $image = get_field('featured_image'); ?>
                        <img class="reveal-up load-hidden" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                    <?php endif; ?>
                    <?php if ( get_field('date') ) : ?>
                            <h6 class="reveal-up load-hidden"><?php echo get_field('date'); ?></h6>
                    <?php endif; ?>
                    <div class="back show-for-large">
                            <a class="reveal-up load-hidden" href="<?php echo site_url(); ?>/blog/">Back to All Blogs</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    <?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>
