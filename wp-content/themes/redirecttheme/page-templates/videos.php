<?php
/*
Template Name: Videos
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

<?php if ( have_rows('videos') ) : ?>
    <section class="blog videos">
        <div class='grid-container'>
            <div class='grid-x grid-margin-x'>
                <?php while( have_rows('videos') ) : the_row(); ?>
                <?php $post_object = get_sub_field('video'); ?>
                <?php if( $post_object ): ?>
                    <?php $post = $post_object; setup_postdata( $post ); ?>
                        <div class='small-12 large-6 reveal-up load-hidden cell'>
                            <div class="block ">
                                <?php if ( get_field('video') ) : ?>
                                    <div class="responsive-embed widescreen">
                                        <?php echo get_field('video'); ?>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if ( get_field('excerpt') ) : ?>
                                    <div class="blog-excerpt">
                                        <?php echo get_field('excerpt'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>




<?php get_footer();
