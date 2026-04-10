<?php
/*
Template Name: Waiver
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
            <div class='small-12 medium-6 medium-offset-3 large-3 large-offset-0 cell'>
                <?php get_template_part( 'template-parts/greeter'); ?>
            </div>
        </div>
    </div>
</header>

<?php if ( have_rows('waiver') ) : ?>
    <?php while( have_rows('waiver') ) : the_row(); ?>
        <section class="waiver">
            <div class='grid-container'>
                <div class='grid-x'>
                    <div class='small-12 large-2 large-offset-2 cell'>
                        <?php if ( get_sub_field('thumbnail') ) : $image = get_sub_field('thumbnail'); ?>
                            <img class="reveal-up load-hidden" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                        <?php endif; ?>           
                    </div>
                    <div class='small-12 large-8 cell'>
                        <?php if ( get_sub_field('download') ) : ?>
                            <div class="download reveal-up load-hidden">
                                <?php echo get_sub_field('download'); ?>
                            </div>        
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<section class="main">
    <div class='grid-container'>
        <div class='grid-x grid-padding-x'>
            <div class='small-12 large-9 cell'>
                <?php if ( get_field('subhead') ) : ?>
                    <div class="subhead reveal-up load-hidden">
                        <?php echo get_field('subhead'); ?>
                    </div>        
                <?php endif; ?>
                <?php if ( have_rows('implementation') ) : ?>
                    <div class='grid-x grid-padding-x implementation'>
                        <?php while( have_rows('implementation') ) : the_row(); ?>
                            <div class='small-12 large-6 cell'>
                                <div class="block reveal-up load-hidden">
                                    <?php the_sub_field('block'); ?>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                
            </div>
            <div class="small-12 cell large-3">
                <?php if ( get_field('property_types') ) : ?>
                    <div class="property-types reveal-up load-hidden">
                        <?php echo get_field('property_types'); ?>
                    </div>        
                <?php endif; ?>
                <?php if ( have_rows('perils') ) : ?>
                    <h4 class="reveal-up load-hidden">Perils Covered</h4>
                    <ul class="menu perils align-center">
                        <?php while( have_rows('perils') ) : the_row(); ?>
                            <li class="peril reveal-up load-hidden">
                                <?php if ( get_sub_field('icon') ) : $image = get_sub_field('icon'); ?>
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                <?php endif; ?>
                                <h6><?php the_sub_field('peril'); ?></h6>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <?php if ( get_field('cherry') ) : ?>
                    <div class="cherry reveal-up load-hidden">
                        <?php echo get_field('cherry'); ?>
                    </div>        
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if ( have_rows('protect') ) : ?>
    <?php while( have_rows('protect') ) : the_row(); ?>
        <section class="protect reveal-up load-hidden">
            <div class='grid-container'>
                <div class='grid-x'>
                    <div class='small-12 large-9 cell'>
                        <?php if ( get_sub_field('cta') ) : ?>
                            <div class="call-to ">
                                <?php echo get_sub_field('cta'); ?>
                            </div>        
                        <?php endif; ?>
                    </div>
                    <div class='small-12 large-3 cell'>
                        <?php 
                            $link = get_sub_field('link');
                            if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="link arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer();
