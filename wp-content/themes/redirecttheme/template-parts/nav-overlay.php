<nav class="nav-overlay">
    <div class="nav-container">
        <div class="fire-navigation">
            <span>EXIT</span>
        </div>
        <div class="nav-menus">
            <?php 
                wp_nav_menu(
                    array(
                        'container'      => false,
                        'menu_class'     => 'menu align-right vertical',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                        'theme_location' => 'overlay',
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
                        'menu_class'     => 'menu align-right',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
                        'theme_location' => 'overlay-sec',
                        'depth'          => 3,
                        'fallback_cb'    => false,
                        'walker'         => new Foundationpress_Top_Bar_Walker(),
                    )
                );
            ?>
        </div>
        <img class="city show-for-large" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/RLL_city.png">
        <img class="city hide-for-large" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/citymobile1.svg">
        <img class="slash" src="<?php echo site_url() ?>/wp-content/uploads/2022/08/rll_navigationslash.svg">
    </div>
</nav>