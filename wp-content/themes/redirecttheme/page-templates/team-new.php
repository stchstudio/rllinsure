<?php
/*
Template Name: Team New
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


<?php if ( have_rows('team') ) : ?>
    <?php while( have_rows('team') ) : the_row(); ?>
        <?php
            $section_title = get_sub_field('section_title');
            $slug = strtolower(str_replace(' ', '-', trim($section_title)));
            ?>
        <section class="team <?php echo $slug ?>">
            <div class='grid-container'>
                <div class='grid-x grid-padding-x'>
                    <div class="small-12 cell">
                        <?php if ( get_sub_field('section_title') ) : ?>
                            <div class="team__section-title">
                                <h3 class="reveal-up load-hidden"><?php echo get_sub_field('section_title'); ?></h3>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php if ( have_rows('team_members') ) : ?>
                        <?php while( have_rows('team_members') ) : the_row(); ?>
                            <?php $post_object = get_sub_field('team_member'); ?>
                            <?php if( $post_object ): ?>
                                <?php $post = $post_object; setup_postdata( $post ); ?>
                                    <div class='small-12 medium-6 large-3 cell'>
                                        <div class="team-member reveal-up load-hidden">
                                            <a class="wrap" href="<?php the_permalink() ?>"></a>
                                            <div class="team-member-headshot">
                                                <?php if ( get_field('headshot_new') ) : $image = get_field('headshot_new'); ?>
                                                    <img class="static" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                                <?php endif; ?>
                                                <?php if ( get_field('headshot_waving') ) : $image = get_field('headshot_waving'); ?>
                                                    <img class="waving" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                                <?php endif; ?>
                                            </div>
                                            <div class="team-member-title">
                                                <h5><?php the_title(); ?></h5>
                                                <?php if ( get_field('job_title') ) : ?>
                                                    <p><?php echo get_field('job_title'); ?></p>
                                                <?php endif; ?>   
                                                    <?php
                                                    $title = get_the_title(); // Assuming get_title() returns a string
                                                    $words = explode(' ', trim($title)); // Split the title into words
                                                    $fname = $words[0] ?? ''; // Get the first word, or empty string if none
                                                    ?>
                                                <div class="team-member-link">
                                                    <a class="link arrow" href="<?php the_permalink() ?>">Meet <?php echo $fname; ?></a>
                                                </div>  
                                            </div>
      
                                        </div>
                                    </div>
                                <?php wp_reset_postdata(); ?>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer();
