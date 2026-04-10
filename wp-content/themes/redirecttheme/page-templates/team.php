<?php
/*
Template Name: Team
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

<?php
    $args = array(
    'post_type' => 'team',
    );
    $query = new WP_Query ($args);
?>
<?php if (  $query->have_posts() ) : ?>
    <section class="team">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class="small-12 cell">
                    <h3 class="reveal-up load-hidden">The RLL Team</h3>
                </div>
                <?php while($query->have_posts() ) : $query->the_post(); ?>
                    <div class='small-12 medium-6 large-3 cell'>
                        <div class="team-member reveal-up load-hidden">
                            <div class="team-member-headshot">
                                <?php if ( get_field('headshot') ) : $image = get_field('headshot'); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                <?php endif; ?>
                            </div>
                            <div class="team-member-title">
                                <h5><?php the_title(); ?></h5>
                                <?php if ( get_field('job_title') ) : ?>
                                    <p><?php echo get_field('job_title'); ?></p>
                                <?php endif; ?>     
                            </div>
                        </div>
                    </div>
                <?php wp_reset_postdata(); ?>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php get_footer();
