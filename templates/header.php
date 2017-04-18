<!--
<header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
-->

<!--  Sidebar / Header  -->
<header>

    <!--  Logo Section  -->
    <div class='logo-wrap'>
        <?php the_custom_logo();  ?>
    </div>


    <div class='show-button'>
        <div class='line line1'></div>
        <div class='line line2'></div>
        <div class='line line3'></div>
    </div>

    <div class='sidebar'>

        <div class='close-button'>
            <div class='line line1'></div>
            <div class='line line2'></div>
        </div>

        <!--   Navigation   -->

        <nav class="nav-primary">
            <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
                endif;
            ?>
        </nav>


        <!--  Social Section  -->
        <div class='social-wrap'>
            <a href=''><i class='fa fa-phone'></i> 260-387-6170</a><br>
            <a href=''><i class='fa fa-envelope-o'></i> office@midamericansalt.com</a>
            <ul class='social-media-list'>
                <li class='social-item'><a href='#'><i class='fa fa-facebook' aria-hidden="true"></i></a></li>
                <li class='social-item'><a href='#'><i class='fa fa-twitter'></i></a></li>
                <li class='social-item'><a href='#'><i class='fa fa-google-plus'></i></a></li>
                <li class='social-item'><a href='#'><i class='fa fa-youtube-play'></i></a></li>
            </ul>
        </div>

    </div>

</header>
