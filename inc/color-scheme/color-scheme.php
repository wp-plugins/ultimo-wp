$base-color: <?php echo $options['bg-base']; ?>;
$highlight-color: <?php echo $options['bg-highlight']; ?>;
$notification-color: <?php echo $options['bg-notification']; ?>;

$indigo-base-color: #fefefe;
$indigo-text-color: #777;
$indigo-icon-color: #777;

@import "<?php echo $this->path('/inc/scss/_admin.scss'); ?>";

// Our function that sets the text color
@function setTextColor($color: #fff) {
  @if (lightness($color) > 60) {
    @return #222; // Lighter backgorund, return dark color
  } @else {
    @return #fff; // Darker background, return light color
  }
}

// Adaptations that we need to make to make sure everything will work fine
#adminmenu a, #adminmenu div.wp-menu-image:before {
  color: setTextColor(<?php echo $options['bg-base']; ?>);
}

#adminmenu .wp-submenu a, #adminmenu .wp-has-current-submenu .wp-submenu a, .folded #adminmenu .wp-has-current-submenu .wp-submenu a, #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a, #adminmenu .wp-has-current-submenu.opensub .wp-submenu a, #adminmenu .wp-menu-arrow div, #collapse-menu, #collapse-button > div:after, #collapse-menu:hover #collapse-button > div:after, #collapse-menu:hover {
  color: setTextColor(<?php echo $options['bg-base']; ?>);
}

#adminmenu a:hover, #adminmenu li.menu-top:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .wp-core-ui .button-primary {
  color: setTextColor(<?php echo $options['bg-highlight']; ?>);
}

.custom-site-logo * {
  color: setTextColor(<?php echo $options['bg-logo']; ?>) !important;
}

/* Header hover */
#wpadminbar .ab-top-menu>li>.ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar .ab-top-menu>li:hover>.ab-item, #wpadminbar .ab-top-menu>li.hover>.ab-item {
  background-color: darken(<?php echo $options['bg-header']; ?>, 10%);
}

// Menu width
<?php if ($options['menu-width'] != '250') : ?>

  <?php $left = ((int) $options['menu-width']) + 30; ?>

  #wpcontent,
  #wpfooter,
  .jetpack-pagestyles #wpcontent {
    margin-left: <?php echo $options['menu-width']; ?>px;
  }

  .custom-site-logo {
     width: <?php echo $options['menu-width']; ?>px !important;
  }

  #adminmenuback,
  #adminmenuwrap, 
  #adminmenu, 
  #adminmenu .wp-submenu {
    width: <?php echo $options['menu-width']; ?>px;
  }

  #adminmenu .wp-submenu {
    left: <?php echo $options['menu-width']; ?>px;
  }

  // Theme Overlay
  .theme-overlay .theme-wrap {
    left: <?php echo $left; ?>px;
  }

<?php endif; ?>

// WPADMINBAR height
<?php if ($options['header-height'] != '60') : ?>
  
  html {padding-top: <?php echo $options['header-height']; ?>px !important;}

  #wpadminbar,

  #wpadminbar .quicklinks > ul > li > a,

  #wpadminbar > #wp-toolbar > #wp-admin-bar-root-default .ab-icon,
  #wpadminbar .ab-icon,
  #wpadminbar .ab-item:before,

  #wpadminbar .menupop .menupop > .ab-item:before,
  #wpadminbar .ab-top-secondary .menupop .menupop > .ab-item:before,

  #wpadminbar #adminbarsearch {
    height: <?php echo $options['header-height']; ?>px !important;
  }

  #wpadminbar .quicklinks .ab-empty-item, #wpadminbar .shortlink-input {
    height: <?php echo $options['header-height']; ?>px !important;
    line-height: <?php echo $options['header-height']; ?>px !important;
  }

  #wpadminbar .quicklinks > ul > li > a,

  #wpadminbar > #wp-toolbar > #wp-admin-bar-root-default .ab-icon,
  #wpadminbar .ab-icon,
  #wpadminbar .ab-item:before,

  #wpadminbar .menupop .menupop > .ab-item:before,
  #wpadminbar .ab-top-secondary .menupop .menupop > .ab-item:before,

  #wpadminbar #adminbarsearch {
    line-height:  <?php echo $options['header-height']; ?>px !important;
  }

<?php endif; ?>

#adminmenu li.wp-menu-separator {
  height: 0;
  margin: 7px 0;
  border-bottom: solid 1px rgba(255, 255, 255, 0.08);
  border-top: solid 1px darken(<?php echo $options['bg-base']; ?>, 10%) !important;
} 

body.login h1 a {
  background-image: url(<?php echo $options['login-page-logo']['url']; ?>) !important;
  width: 100% !important;
  min-height: 100px !important;
  background-size: auto 100% !important;
}