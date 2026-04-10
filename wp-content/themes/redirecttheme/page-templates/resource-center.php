<?php
/*
Template Name: Resource Center
*/
get_header(); ?>

<header class="page-header">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 cell'>
                <?php if ( get_field('headline') ) : ?>
                    <div class="headline reveal-up load-hidden">
                        <?php echo get_field('headline'); ?>
                    </div>        
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<?php if ( have_rows('resources') ) : ?>
    <section class="resource-center">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class="small-12 cell resources">
                    <?php while( have_rows('resources') ) : the_row(); ?>
                        <div class="resource reveal-up load-hidden">
                            <?php if ( get_sub_field('resource') ) : ?>
                                <?php echo get_sub_field('resource'); ?>
                            <?php endif; ?>
                            <?php if ( get_sub_field('show_latest') ) : ?>
                                <?php $slug = get_sub_field('slug') ?>
                                <?php
                                    $args = array(
                                    'post_type' => $slug,
                                    'posts_per_page' => 1,
                                    );
                                    $query = new WP_Query ($args);
                                ?>
                                <?php if (  $query->have_posts() ) : ?>
                                    <?php while($query->have_posts() ) : $query->the_post(); ?>
                                        <?php if(get_field('external_link')): ?>
                                                <a target="_blank" class="link arrow" href="<?php echo get_field('external_link') ?>"><?php the_title() ?></a>
                                            <?php else: ?>
                                                <a class="link arrow" href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                        <?php endif; ?>
                                        
                                        <?php if ( get_field('excerpt') ) : ?>
                                            <?php echo get_field('excerpt'); ?>
                                        <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            <?php endif; ?>
                            <?php 
                            $link = get_sub_field('link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer();
