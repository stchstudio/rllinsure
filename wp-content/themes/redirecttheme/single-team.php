<?php get_header(); ?>

<header class="team-header"></header>

<section class="team-member">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 large-4 cell'>
                <?php if ( get_field('headshot_new') ) : $image = get_field('headshot_new'); ?>
                    <img class="headshot reveal-up load-hidden" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                <?php endif; ?>
                <div class="contact reveal-up load-hidden">
                    <h1 class="hide-for-large"><?php the_title() ?></h1>
                    <?php if ( get_field('email') ) : ?>
                        <h6><?php echo get_field('email'); ?></h6>
                    <?php endif; ?>
                    <?php if ( get_field('job_title') ) : ?>
                            <h5 class="hide-for-large"><?php echo get_field('job_title'); ?></h5>
                    <?php endif; ?>
                    <?php if ( get_field('phone') ) : ?>
                        <p><?php echo get_field('phone'); ?></p>
                    <?php endif; ?>
                    <?php if ( have_rows('social') ) : ?>
                        <?php while( have_rows('social') ) : the_row(); ?> 
                            <?php 
                            $link = get_sub_field('link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="reveal-up load-hidden link arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="back show-for-large reveal-up load-hidden">
                    <a class="" href="<?php echo site_url(); ?>/our-team/">Back to All Team</a>
                </div>
            </div>
            <div class='small-12 large-8 cell'>
                <div class="title">
                    <p class="show-for-large reveal-up load-hidden">Hi, it’s nice to meet you. I’m...</p>
                    <h1 class="show-for-large reveal-up load-hidden"><?php the_title() ?></h1>
                    <?php if ( get_field('job_title') ) : ?>
                            <h5 class="show-for-large reveal-up load-hidden"><?php echo get_field('job_title'); ?></h5>
                    <?php endif; ?>
                </div>
                <div class="bio reveal-up load-hidden">
                    <?php if ( get_field('bio') ) : ?>
                        <?php echo get_field('bio'); ?>
                    <?php endif; ?>
                </div>
                <div class="back hide-for-large reveal-up load-hidden">
                    <a href="<?php echo site_url(); ?>/team/">Back to All Team</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>