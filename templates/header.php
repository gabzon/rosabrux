<?php
  $theme_options = get_option('my_theme_settings');
  $address = $theme_options['address'];
  $map = $theme_options['google_maps'];
?>
<header class="ui secondary fixed menu">
    <div class="ui container">
        <nav class="navigation">
            <ul>
                <li><a href="<?= esc_url(home_url('/')); ?>" style="text-transform:uppercase"><?php bloginfo('name'); ?></a></li>
                <br>
                <li>
                    <a href="<?php echo $map; ?>" target="_blank">
                        <?php echo $address; ?>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="right menu">
            <nav class="navigation nav-right">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                endif;
                ?>
            </nav>
        </div>
    </div>
</header>
