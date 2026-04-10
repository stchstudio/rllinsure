<?php if ( get_field('tagline', 'option') ) : ?>
    <section class="tagline">
        <div class="reveal-left load-hidden">
            <?php echo get_field('tagline', 'option'); ?>
        </div>
    </section>
<?php endif; ?>

<footer>
    <div class='grid-container'>
        <div class='grid-x'>
            <div class='small-12 cell'>
                <?php 
                    wp_nav_menu(
                        array(
                            'container'      => false,
                            'menu_class'     => 'menu align-center reveal-up load-hidden',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                            'theme_location' => 'footer',
                            'depth'          => 3,
                            'fallback_cb'    => false,
                            'walker'         => new Foundationpress_Top_Bar_Walker(),
                        )
                    );
                ?>
                <?php 
                    wp_nav_menu(
                        array(
                            'container'      => false,
                            'menu_class'     => 'menu align-center reveal-up load-hidden',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                            'theme_location' => 'footer-sec',
                            'depth'          => 3,
                            'fallback_cb'    => false,
                            'walker'         => new Foundationpress_Top_Bar_Walker(),
                        )
                    );
                ?>
                <?php if ( have_rows('social_menu', 'option') ) : ?>
                    <ul class="menu align-center">

                        <?php while( have_rows('social_menu', 'option') ) : the_row(); ?>
                    
                            <li class="reveal-up load-hidden">
                                
                            <?php 
                                $link = get_sub_field('link');
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                                        <?php if ( get_sub_field('icon') ) : $image = get_sub_field('icon'); ?>
                                            <img src="<?php echo $image['url']; ?>" alt="<?php echo esc_html( $link_title ); ?>"/>
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>

                            </li>
                    
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
                <div class="copyright reveal-up load-hidden"><a style="color: #f2eeea; text-decoration: underline;" href="<?php echo site_url() ?>/privacy-policy/">Privacy Policy</a> ©2005–<?php echo date('Y') ?> RLL A DOXA Company. All rights reserved.</div>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.9.6/lottie.min.js" integrity="sha512-yAr4fN9WZH6hESbOwoFZGtSgOP+LSZbs/JeoDr02pOX4yUFfI++qC9YwIQXIGffhnzliykJtdWTV/v3PxSz8aw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php wp_footer(); ?>
<script type="text/javascript" id="zsiqchat">var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode: "4628d3bdaa752d7efe8678ed3ea9c627ff504d95fd299d6cad0440c18d7d9ff355278a360e26360f6cf72b884c5a3387", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);"<div id='zsiqwidget'></div>"</script>
</body>
</html>


