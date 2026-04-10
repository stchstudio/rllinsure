<?php
/*
Template Name: One Sheets
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
            </div>
            <div class='small-12 large-3 reveal-up load-hidden  cell'>
                <?php if ( have_rows('quick_links') ) : ?>
                    <div class="quick-links">
                    <p><em>Quick Links</em></p>
                    <?php while( have_rows('quick_links') ) : the_row(); ?> 
                        <?php 
                        $link = get_sub_field('link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a class="link arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php endif; ?>
        
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<?php
    $args = array(
    'post_type' => 'one_sheet',
    );
    $query = new WP_Query ($args);
?>
<?php if (  $query->have_posts() ) : ?>
    <section class="blog">
        <div class='grid-container'>
            <?php while($query->have_posts() ) : $query->the_post(); ?>
                <div class='grid-x blog-post reveal-up load-hidden'>
                    <div class='small-12 large-3 cell'>
                        <?php if ( get_field('featured_image') ) : $image = get_field('featured_image'); ?>
                            <div class="blog-thumbnail"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/></div>
                        <?php endif; ?>
                    </div>
                    <div class='small-12 large-9 cell'>
                        <div class="blog-excerpt">
                            <h3><?php the_title() ?></h3>
                            <a download href="<?php the_field('one_sheet'); ?>" class="arrow link">Download</a>
                        </div>
                    </div>
                </div>
            <?php wp_reset_postdata(); ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>

<?php get_footer();
