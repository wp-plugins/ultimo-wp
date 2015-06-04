<?php
global $UltimoWP;

$sections = array();

// - - - - - - - - - - - - - - 
// General
// - - - - - - - - - - - - - - 

$sections[] = array(
  'title'  => __('General Options', $UltimoWP->textDomain),
  'desc'   => __('General settings of the theme.', $UltimoWP->textDomain),
  'icon'   => 'el-icon-cog-alt',
  'fields' => array(
    
    array(
      'id'       => 'preset',
      'type'     => 'image_select', 
      'presets'  => true,
      'title'    => __('Presets', $UltimoWP->textDomain),
      'subtitle' => __('Select one of our customizable themes to start giving your style to the WordPress Admin Dashboard.', $UltimoWP->textDomain),
      'default'  => 0,

      'options'  => array(
        
        // JSON string of preset options
        'default-theme' => array(
          'alt'     => 'Default Theme', 
          'img'     => $UltimoWP->getAsset('presets/default.png'),
          'presets' => '{"preset":0,"help-tabs":true,"screen-options-tabs":true,"bg-base":"#222","bg-highlight":"#E14D43","bg-notification":"#69A8BB","advanced-color-control":false,"bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":["Welcome back,","Hello there,","What\'s up,"],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'"},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png') .'"},"logo-text":"Wordpress","header-height":60,"menu-width":250,"menu-separators":true,"menu-icons":true,"menu-manage":false,"footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'"},"login-page-bg":{"background-size":"cover","background-color":"#222"},"redux_import_export":"","redux-backup":1}'
        ),
        
        // JSON string of preset options
        'pro-theme-dark' => array(
          'alt'     => 'Pro Theme Dark', 
          'img'     => $UltimoWP->getAsset('presets/pro-theme-dark.png'),
          'presets' => '{"last_tab":"","help-tabs":"1","screen-options-tabs":"1","bg-base":"#111111","bg-highlight":"#222222","bg-notification":"#1e73be","advanced-color-control":"","bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":[""],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-text":"Wordpress","header-height":"50","menu-width":"230","menu-separators":"1","menu-icons":"0","footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"login-page-bg":{"background-color":"#222","background-repeat":"","background-size":"cover","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"presets":0,"menu-manage":false,"redux_import_export":"","redux-backup":1}'
        ),
        
        // JSON string of preset options
        'pro-theme-light' => array(
          'alt'     => 'Pro Theme Light', 
          'img'     => $UltimoWP->getAsset('presets/pro-theme-light.png'),
          'presets' => '{"last_tab":"","help-tabs":"1","screen-options-tabs":"1","bg-base":"#cccccc","bg-highlight":"#222222","bg-notification":"#1e73be","advanced-color-control":"","bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":[""],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-text":"Wordpress","header-height":"50","menu-width":"230","menu-separators":"1","menu-icons":"0","footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"login-page-bg":{"background-color":"#222","background-repeat":"","background-size":"cover","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"preset":0,"menu-manage":false,"redux_import_export":"","redux-backup":1}'
        ),
        
        // JSON string of preset options
        'midnight' => array(
          'alt'     => 'Midnight', 
          'img'     => $UltimoWP->getAsset('presets/midnight.png'),
          'presets' => '{"last_tab":"","help-tabs":"1","screen-options-tabs":"1","bg-base":"#363b3f","bg-highlight":"#E14D43","bg-notification":"#69A8BB","advanced-color-control":"","bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":["Welcome back,","Hello there,","What\'s up,"],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-text":"Wordpress","header-height":"60","menu-width":"230","menu-separators":"1","menu-icons":"1","footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"login-page-bg":{"background-color":"#363b3f","background-repeat":"","background-size":"cover","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"preset":0,"menu-manage":false,"redux_import_export":"","redux-backup":1}'
        ),
        
        // JSON string of preset options
        'coffee' => array(
          'alt'     => 'Coffee', 
          'img'     => $UltimoWP->getAsset('presets/coffee.png'),
          'presets' => '{"last_tab":"","help-tabs":"1","screen-options-tabs":"1","bg-base":"#59524c","bg-highlight":"#c7a589","bg-notification":"#9ea476","advanced-color-control":"","bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":["Welcome back,","Hello there,","What\'s up,"],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-text":"Wordpress","header-height":"60","menu-width":"230","menu-separators":"1","menu-icons":"1","footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"login-page-bg":{"background-color":"#363b3f","background-repeat":"","background-size":"cover","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"preset":0,"menu-manage":false,"redux_import_export":"","redux-backup":1}'
        ),
        
        // JSON string of preset options
        'ectoplasm' => array(
          'alt'     => 'Ectoplasm', 
          'img'     => $UltimoWP->getAsset('presets/ectoplasm.png'),
          'presets' => '{"last_tab":"","help-tabs":"1","screen-options-tabs":"1","bg-base":"#413256","bg-highlight":"#a3b745","bg-notification":"#d46f15","advanced-color-control":"","bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":["Welcome back,","Hello there,","What\'s up,"],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-text":"Wordpress","header-height":"60","menu-width":"250","menu-separators":"1","menu-icons":"1","footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"login-page-bg":{"background-color":"#222","background-repeat":"","background-size":"cover","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"preset":0,"menu-manage":false,"redux_import_export":"","redux-backup":1}'
        ),
        
        // JSON string of preset options
        'ocean' => array(
          'alt'     => 'Ocean', 
          'img'     => $UltimoWP->getAsset('presets/ocean.png'),
          'presets' => '{"last_tab":"","help-tabs":"1","screen-options-tabs":"1","bg-base":"#738e96","bg-highlight":"#9ebaa0","bg-notification":"#aa9d88","advanced-color-control":"","bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":["Welcome back,","Hello there,","What\'s up,"],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png'). '","id":"","height":"","width":"","thumbnail":""},"logo-text":"Wordpress","header-height":"60","menu-width":"250","menu-separators":"1","menu-icons":"1","footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"login-page-bg":{"background-color":"#222","background-repeat":"","background-size":"cover","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"preset":0,"menu-manage":false,"redux_import_export":"","redux-backup":1}'
        ),
        
        // JSON string of preset options
        'sunrise' => array(
          'alt'     => 'Sunrise', 
          'img'     => $UltimoWP->getAsset('presets/sunrise.png'),
          'presets' => '{"last_tab":"","help-tabs":"1","screen-options-tabs":"1","bg-base":"#cf4944","bg-highlight":"#dd823b","bg-notification":"#ccaf0b","advanced-color-control":"","bg-logo":"#3498db","bg-header":"#fdfdfd","welcome-text":["Welcome back,","Hello there,","What\'s up,"],"logo-align":"left","logo-type":"image","logo-img":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-img-mini":{"url":"'. $UltimoWP->getAsset('logo-mini.png') .'","id":"","height":"","width":"","thumbnail":""},"logo-text":"Wordpress","header-height":"60","menu-width":"250","menu-separators":"1","menu-icons":"1","footer-left-text":"","footer-right-text":"","login-page-logo":{"url":"'. $UltimoWP->getAsset('logo.png') .'","id":"","height":"","width":"","thumbnail":""},"login-page-bg":{"background-color":"#222","background-repeat":"","background-size":"cover","background-attachment":"","background-position":"","background-image":"","media":{"id":"","height":"","width":"","thumbnail":""}},"preset":0,"menu-manage":false,"redux_import_export":"","redux-backup":1}'
        ),
        
      ),
    ),
    
    array(
      'id'       => 'help-tabs',
      'type'     => 'switch', 
      'title'    => __('Display Help Tab?', $UltimoWP->textDomain),
      'subtitle' => __('Select if your want to dusplay the top Help Tabs.', $UltimoWP->textDomain),
      'default'  => true,
    ),

    array(
      'id'       => 'screen-options-tabs',
      'type'     => 'switch', 
      'title'    => __('Display Screen Options Tab?', $UltimoWP->textDomain),
      'subtitle' => __('Select if your want to dusplay the top Screen Options Tabs.', $UltimoWP->textDomain),
      'default'  => true,
    ),
    
  )
);

// - - - - - - - - - - - - - - 
// Color Schemes
// - - - - - - - - - - - - - -

// Color Schemes Fields
$color_schemes = array();

// Color Scheme add the defsults one
// TODO: Create one or two colorschemes diretenes

// Add the NEW color scheme

// Menu
$color_schemes[] = array(
  'id'       => "bg-base",
  'type'     => 'color',
  'title'    => __('Base Color', $UltimoWP->textDomain),
  'subtitle' => __('Select the primary color of this Color Scheme.', $UltimoWP->textDomain),
  'desc'     => __('This is the color used as background for the menu and the header.', $UltimoWP->textDomain),
  'default'  => '#222',
  'transparent' => false,
  'validate' => 'color',
  'compiler' => true,
);

// highlight
$color_schemes[] = array(
  'id'       => "bg-highlight",
  'type'     => 'color',
  'title'    => __('Highlight Color', $UltimoWP->textDomain),
  'subtitle' => __('Select the notification color of this Color Scheme.', $UltimoWP->textDomain),
  'desc'     => __('This is the color used as background for the menu and the header.', $UltimoWP->textDomain),
  'default'  => '#E14D43',
  'transparent' => false,
  'validate' => 'color',
  'compiler' => true,
);

// notifications
$color_schemes[] = array(
  'id'       => "bg-notification",
  'type'     => 'color',
  'title'    => __('Notification Color', $UltimoWP->textDomain),
  'subtitle' => __('Select the notification color of this Color Scheme.', $UltimoWP->textDomain),
  'desc'     => __('This is the color used as background for the menu and the header.', $UltimoWP->textDomain),
  'default'  => '#69A8BB',
  'transparent' => false,
  'validate' => 'color',
  'compiler' => true,
);

// Advanced Color control
$color_schemes[] = array(
  'id'       => "advanced-color-control",
  'type'     => 'switch',
  'title'    => __('Advanced Control', $UltimoWP->textDomain),
  'subtitle' => __('Enabling this option will give you extra control over the colors used on the layout.', $UltimoWP->textDomain),
  // 'desc'     => __('This is the color used as background for the menu and the header.', $UltimoWP->textDomain),
  'default'  => false,
);

// BG Logo Area
$color_schemes[] = array(
  'id'       => "bg-logo",
  'type'     => 'color',
  'title'    => __('Logo Background Color', $UltimoWP->textDomain),
  'subtitle' => __('Select the notification color of this Color Scheme.', $UltimoWP->textDomain),
  'desc'     => __('This is the color used as background for the menu and the header.', $UltimoWP->textDomain),
  'default'  => '#3498db',
  'transparent' => false,
  'validate' => 'color',
  'required' => array('advanced-color-control', '=', '1'),
  'compiler' => array(
    'background-color' => '.custom-site-logo.wp-ui-notification',
  ),
);

// BG Header
$color_schemes[] = array(
  'id'       => "bg-header",
  'type'     => 'color',
  'title'    => __('Header Background Color', $UltimoWP->textDomain),
  'subtitle' => __('Select the notification color of this Color Scheme.', $UltimoWP->textDomain),
  'desc'     => __('This is the color used as background for the menu and the header.', $UltimoWP->textDomain),
  'default'  => '#fdfdfd',
  'transparent' => false,
  'validate' => 'color',
  'required' => array('advanced-color-control', '=', '1'),
  'compiler' => array(
    'background-color' => '#wpadminbar',
  ),
);

// - - - - - - - - - - - - - - 
// Make Panel itself
// - - - - - - - - - - - - - - 

// Create Section
$sections[] = array(
  'title'  => __('Color Scheme', $UltimoWP->textDomain),
  'desc'   => __('Personalize the colors of the theme to make it look as you always wanted.', $UltimoWP->textDomain),
  'icon'   => 'el-icon-tint',
  'fields' => $color_schemes,
);

// - - - - - - - - - - - - - - 
// Create Color Schemes Panels
// - - - - - - - - - - - - - - 

// Available or not?
//  $fields[] = array(
//    'id'       => "{$slug}-switch",
//    'type'     => 'switch',
//    'title'    => sprintf(__('Activate %s Color Scheme.', $UltimoWP->textDomain), $cs),
//    'subtitle' => __('Turn this switch on to make this color scheme available to the users.', $UltimoWP->textDomain),
//    'default'  => true 
//  );

// - - - - - - - - - - - - - - 
// Header
// - - - - - - - - - - - - - - 

$sections[] = array(
  'title'  => __('Header', $UltimoWP->textDomain),
  'desc'   => __('Custom header settings.', $UltimoWP->textDomain),
  'icon'   => 'el-icon-chevron-up',
  'fields' => array(
    array(
      'id'       => 'welcome-text',
      'type'     => 'multi_text',
      'title'    => __('Welcome Text', $UltimoWP->textDomain),
      'desc'     => __('You can leave it blank to display only the username. You can enter more than one and in each page one will be randomly selected.', $UltimoWP->textDomain),
      'subtitle' => __('This is the text shown before the username.', $UltimoWP->textDomain),
      'default'  => array(
        __('Welcome back,', $UltimoWP->textDomain),
        __('Hello there,', $UltimoWP->textDomain),
        __('What\'s up,', $UltimoWP->textDomain),
      ),
    ),

    array(
      'id'       => 'logo-align',
      'type'     => 'button_set',
      'title'    => __('Logo Position', $UltimoWP->textDomain),
      'subtitle' => __('Select where to position your logo or text.', $UltimoWP->textDomain),
      // 'desc'     => __('This is the description field, again good for additional info.', $UltimoWP->textDomain),
      //Must provide key => value pairs for options
      'options' => array(
        'left'   => __('Left', $UltimoWP->textDomain), 
        'center' => __('Center', $UltimoWP->textDomain), 
        'right'  => __('Right', $UltimoWP->textDomain)
      ), 
      'default' => 'left'
    ),

    array(
      'id'       => 'logo-type',
      'type'     => 'button_set',
      'title'    => __('Logo Type', $UltimoWP->textDomain),
      'subtitle' => __('Select the type of your logo.', $UltimoWP->textDomain),
      // 'desc'     => __('This is the description field, again good for additional info.', $UltimoWP->textDomain),
      //Must provide key => value pairs for options
      'options' => array(
        'image' => __('Image', $UltimoWP->textDomain), 
        'text'  => __('Text', $UltimoWP->textDomain)
      ), 
      'default' => 'image'
    ),

    // Case Logo Image
    array(
      'id'       => 'logo-img',
      'required' => array('logo-type', '=', 'image'),
      'type'     => 'media',
      'url'      => true,
      'title'    => __('Logo', $UltimoWP->textDomain),
      // 'desc'     => __('Basic media uploader with disabled URL input field.', $UltimoWP->textDomain),
      'subtitle' => __('Select the logo image you want to use.', $UltimoWP->textDomain),
      'default'  => array(
        'url'  => $UltimoWP->getAsset('logo.png')
      ),
    ),

    array(
      'id'       => 'logo-img-mini',
      'required' => array('logo-type', '=', 'image'),
      'type'     => 'media', 
      'url'      => true,
      'title'    => __('Logo (Folded Version)', $UltimoWP->textDomain),
      // 'desc'     => __('Basic media uploader with disabled URL input field.', $UltimoWP->textDomain),
      'subtitle' => __('Select the logo image you want to use when the menu is folded.', $UltimoWP->textDomain),
      'default'  => array(
        'url'  => $UltimoWP->getAsset('logo-mini.png')
      ),
    ),

    // Case Logo Text
    array(
      'id'       => 'logo-text',
      'required' => array('logo-type', '=', 'text'),
      'type'     => 'text', 
      'url'      => true,
      'title'    => __('Logo Text', $UltimoWP->textDomain),
      // 'desc'     => __('Basic media uploader with disabled URL input field.', $UltimoWP->textDomain),
      'subtitle' => __('Select the logo Text', $UltimoWP->textDomain),
      'default'  => get_bloginfo('Name')
    ),

    // Height
    array(
      'id'       => 'header-height',
      'type'     => 'slider',
      'title'    => __('Header Height', $UltimoWP->textDomain),
      // 'desc'     => __('Basic media uploader with disabled URL input field.', $UltimoWP->textDomain),
      'subtitle' => __('Select the height of the header bar.', $UltimoWP->textDomain),
      "default"  => 60,
      "min"      => 50,
      "step"     => 5,
      "max"      => 100,
      'display_value' => 'text',
      'compiler' => true
    ),

  )
);

// - - - - - - - - - - - - - - 
// Menu
// - - - - - - - - - - - - - -

// Create Section
$sections[] = array(
  'title'  => __('Menu', $UltimoWP->textDomain),
  'desc'   => __('Sidebar menu settings.', $UltimoWP->textDomain),
  'icon'   => 'el-icon-lines',
  'fields' => array(
    array(
      'id'       => "menu-width",
      'type'     => 'slider',
      'title'    => __('Menu Width', $UltimoWP->textDomain),
      'subtitle' => __('Select the width of the main menu.', $UltimoWP->textDomain),
      "default"  => 250,
      "min"      => 180,
      "step"     => 5,
      "max"      => 350,
      'display_value' => 'text',
      'compiler' => true
    ),

    array(
      'id'       => "menu-separators",
      'type'     => 'switch',
      'title'    => __('Display Separators', $UltimoWP->textDomain),
      'subtitle' => __('Select if you want to display the menu separators or not.', $UltimoWP->textDomain),
      "default"  => true,
      'compiler' => false
    ),

    array(
      'id'       => "menu-icons",
      'type'     => 'switch',
      'title'    => __('Display Icons', $UltimoWP->textDomain),
      'subtitle' => __('Select if you want to display the menu icons or not.', $UltimoWP->textDomain),
      "default"  => true,
      'compiler' => false
    ),

    array(
      'id'       => "menu-manage",
      'type'     => 'info',
      'title'    => __('You can hide, rename, change the icon for the menu items using WPAMM', $UltimoWP->textDomain),
      'desc'     => __('We added to Ultimo WP our awesome plugin WPAMM, that lets you hide, rename, reorder ad change the icon of the WordPress Admin Menu Items, based on user or roles! Try it out:
        <br><br><a href="'. admin_url('edit.php?post_type=amm') .'" class="button button-primary">Use WP Admin Menu Manager</a>', $UltimoWP->textDomain),
      //'desc'     => __('You can hide, rename, change the icon for the menu items using WPAMM', $UltimoWP->textDomain),
      "default"  => false,
      'compiler' => false
    ),
  )
);

// - - - - - - - - - - - - - - 
// Footer
// - - - - - - - - - - - - - - 

$sections[] = array(
  'title'  => __('Footer', $UltimoWP->textDomain),
  'desc'   => __('Change the footer texts.', $UltimoWP->textDomain),
  'icon'   => 'el-icon-chevron-down',
  'fields' => array(
    array(
      'id'       => 'footer-left-text',
      'type'     => 'editor',
      'title'    => __('Left Footer text', $UltimoWP->textDomain),
      'subtitle' => __('Add your custom left footer text.', $UltimoWP->textDomain),
      'desc'     => __('To hide it, just save the field with at least one space (leaving it blank will display WordPress defaults).', $UltimoWP->textDomain),
      'default'  => '',
    ),

    array(
      'id'       => 'footer-right-text',
      'type'     => 'editor',
      'title'    => __('Right Footer text', $UltimoWP->textDomain),
      'subtitle' => __('Add your custom right footer text.', $UltimoWP->textDomain),
      'desc'     => __('To hide it, just save the field with at least one space (leaving it blank will display WordPress defaults, in this case, the wordpress version).', $UltimoWP->textDomain),
      'default'  => '',
    ),
  )
);

// - - - - - - - - - - - - - - 
// Login Page
// - - - - - - - - - - - - - - 

$sections[] = array(
  'title'  => __('Login', $UltimoWP->textDomain),
  'desc'   => __('Custom Login page settings.', $UltimoWP->textDomain),
  'icon'   => 'el-icon-unlock',
  'fields' => array(

    array(
      'id'       => 'login-page-logo',
      'type'     => 'media',
      'url'      => true,
      'title'    => __('Login Page Logo', $UltimoWP->textDomain),
      // 'desc'     => __('Basic media uploader with disabled URL input field.', $UltimoWP->textDomain),
      'subtitle' => __('Select the logo image you want to see in your login page.', $UltimoWP->textDomain),
      'default'  => array(
        'url'  => $UltimoWP->getAsset('logo.png')
      ),
    ),

    array(
      'id'       => 'login-page-bg',
      'type'     => 'background',
      'url'      => true,
      'title'    => __('Login Page Background', $UltimoWP->textDomain),
      // 'desc'     => __('Basic media uploader with disabled URL input field.', $UltimoWP->textDomain),
      'subtitle' => __('Select the background options you want to see in your login page.', $UltimoWP->textDomain),
      'compiler' => array('background' => 'body.login '),
      'default' => array(
        'background-size'  => 'cover',
        'background-color' => '#222',
      ),
    ),
  ),
);

$this->sections = $sections;