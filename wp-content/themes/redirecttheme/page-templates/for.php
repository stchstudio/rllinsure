<?php
/*
Template Name: For [...]
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
            <div class='small-12 large-3 cell'>
                <?php if ( have_rows('quick_links') ) : ?>
                    <div class="quick-links reveal-up load-hidden">
                    <p><em>Quick Links</em></p>
                    <?php while( have_rows('quick_links') ) : the_row(); ?> 

                        <?php $border = get_sub_field('border_bottom');  ?>
                        <?php 
                        $link = get_sub_field('link');
                        if( $link ): 
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <?php if($border): ?>
                                <a class="link arrow border-bottom" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php else: ?>
                                <a class="link arrow" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            <?php endif; ?>

                        <?php endif; ?>
        
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<?php if ( get_field('intro') ) : ?>
    <section class="intro">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 large-6 cell'>
                    <div class="reveal-up load-hidden">
                        <?php echo get_field('intro'); ?>
                    </div>
                </div>
                <div class='small-12 large-6 cell'>
                    <?php if ( get_field('video') ) : ?>
                        <div class="video-container reveal-up load-hidden">
                            <?php if ( get_field('video_headline') ) : ?>
                                <?php echo get_field('video_headline'); ?>
                            <?php endif; ?>
                            <div class="video">
                                <div class="responsive-embed widescreen">
                                    <?php echo get_field('video'); ?>
                                </div>
                            </div>     
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <img class="slant" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/rll_darkblue_downslant.svg" />
    </section>
<?php endif; ?>


<?php if ( have_rows('stats') ) : ?>
    <section class="stats-container">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 cell'>
                    <h6 class="text-center reveal-up load-hidden">BIG, SCARY, NUMBERS</h6>
                    <ul class="menu stats align-center">
                        <?php while( have_rows('stats') ) : the_row(); ?>
                            <li class="stat reveal-up load-hidden"><?php the_sub_field('stat'); ?></li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php if ( have_rows('calculator') ) : ?>
    <?php while( have_rows('calculator') ) : the_row(); ?>
        <?php if ( get_sub_field('body') ) : ?>
            <section class="calculator hide">
                <div class='grid-container'>
                    <div class='grid-x grid-padding-x'>
                        <div class='small-12 large-6 cell'>
                            <div class="calculator__body">
                                <?php echo get_sub_field('body'); ?>
                            </div>
                        </div>
                        <div class='small-12 large-6 cell'>
                            <?php if ( get_sub_field('image') ) : $image = get_sub_field('image'); ?>
                                <div class="calculator__image">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>



<?php if ( get_field('solution') ) : ?>
    <section class="solution">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class="small-12 cell">
                    <div class="border"></div>
                </div>
                <div class='small-12 large-4 cell'>
                    <?php if ( get_field('solution') ) : ?>
                        <div class="reveal-up load-hidden">
                            <?php echo get_field('solution'); ?>
                        </div>        
                    <?php endif; ?>
                </div>
                <div class='small-12 large-8 cell'>
                    <h6 class="reveal-up load-hidden" style="color: #8E5BA6; font-weight: 600;">AND HERE’S THE SOLUTION</h6>
                    <?php if ( get_field('waiver') ) : ?>
                        <div class="waiver reveal-up load-hidden">
                            <?php echo get_field('waiver'); ?>
                        </div>        
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ( have_rows('downloads') ) : ?>

    <section class="downloads">
        <div class='grid-container'>
            <div class='grid-x'>
                <div class='small-12 large-6 cell'>
                    <h6 class="reveal-left load-hidden">The RLL App is now available to download</h6>
                </div>
                <div class='small-12 large-6 cell'>
                    <ul class="menu align-right">
                        <?php while( have_rows('downloads') ) : the_row(); ?>

                            <?php if ( get_sub_field('image') ) : $image = get_sub_field('image'); ?>
                                <?php 
                                $link = get_sub_field('link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <li class="reveal-left load-hidden"><a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/></a></li>
                                <?php endif; ?>
                                
                            <?php endif; ?>

                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>


<?php if ( have_rows('benefits') ) : ?>
    <section class="benefits">
        <div class='grid-container'>
            <div class='grid-x'>
                <?php if ( get_field('benefits_headline') ) : ?>
                    <div class='reveal-up load-hidden small-12 cell'>
                        <?php echo get_field('benefits_headline'); ?>
                    </div>
                <?php endif; ?>
                <div class='reveal-up load-hidden small-12 medium-10 medium-offset-1 large-8 large-offset-2 cell'>
                    <div class="benefits-slick">
                        <?php while( have_rows('benefits') ) : the_row(); ?>
                            <div class="benefit">
                                <?php the_sub_field('benefit'); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>   


<?php if ( get_field('lead_form') ) : ?>
    <section class="lead-form reveal-up load-hidden" id="learn-more">
        <div class='grid-container'>
            <div class='grid-x grid-padding-x'>
                <div class='small-12 large-12 cell'>
                    <?php echo get_field('lead_form'); ?>
                </div>
            </div>
        </div>
    </section>    

    <div class="reveal large" id="leadModal1" data-reveal data-animation-in="fade-in">
        <div class="grid-x">
            <div class="small-12 large-2 show-for-large cell">
                <img class="illustration-left" src="https://rllinsure.com/wp-content/uploads/2025/04/LadyMoney.png" alt="Lady Money">
            </div>
            <div class="small-12 large-8 cell">
                <div class="reveal__form__headline">
                    <h2>Refer Clients.<br />
                        Get Paid. Repeat.</h2>
                    <p>It's a win, win, win. Learn how.</p>
                </div>
            </div>
            <div class="small-12 large-2 show-for-large  cell">
                <img class="illustration-right" src="https://rllinsure.com/wp-content/uploads/2025/04/MoneyMan.png" alt="Money Man">
            </div>
            <div class="small-12 cell">
                <div id="modal-form-container">
                    <?php echo do_shortcode('[gravityform id="12" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>


<?php endif; ?>




<?php get_footer();
