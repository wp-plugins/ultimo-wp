<?php

/*
  Plugin Name: Ultimo WP Dashboard Theme
  Plugin URI: 
  Description: The absolute WP Dashboard Theme.
  Version: 0.0.1
 */

/**
 * Loads our incredibily awesome Paradox Framework, which we are going to use a lot.
 */
require 'paradox/paradox-plugin.php';

/**
 * Loads TGM do require Redux Framework
 */
require 'inc/tgm/require.php';

// Loads the Plugin
require 'admin/admin.php';

/**
 * Our plugin starts here
 *
 * UltimoWP is a WordPress plugin that completly transforms your WordPress admin interface, giving it a 
 * awesome and beautful Google Material Design interface.
 */
class UltimoWP extends ParadoxPlugin {
  
  /**
   * Creates or returns an instance of this class.
   * @return object The instance of this class, to be used.
   */
  public static function init() {
    // If an instance hasn't been created and set to $instance create an instance and set it to $instance.
    if (null == self::$instance) {self::$instance = new self;}
    return self::$instance;
  }
  
  /**
   * Initializes the plugin adding all important hooks and generating important instances of our framework.
   */
  public function __construct() {
    
    // Check for Redux FrameWork
    if (!class_exists("ReduxFramework"))
      return;
    
    // Setup
    $this->id         = 'ultimo-wp';
    $this->textDomain = 'ultimo-wp';
    $this->file       = __FILE__;
    
    // Set Debug Temporarily to True
    $this->debug = true;
    
    // Calling parent construct
    parent::__construct();
    
    // Now we call the Advanced Custom Posts Plugin, that will handle our Options Page
    // $this->addACF(); // Since we wont use it, there's no point in adding it.
    
  }
  
  /**
   * Enqueue and register Admin JavaScript files here.
   */
  public function enqueueAdminScripts() {
    // Common and Admin JS
    wp_enqueue_script($this->id.'common', $this->url('assets/js/common.min.js'), false, '', true);
    wp_enqueue_script($this->id.'admin', $this->url('assets/js/admin.min.js'), array($this->id.'common'), '', true);
  }

  /**
   * Enqueue and register Admin CSS files here.
   */
  public function enqueueAdminStyles() {
    // Common and Admin styles
    wp_dequeue_style('admin-bar');
    wp_enqueue_style($this->id.'common', $this->url('assets/css/common.min.css'));
    wp_enqueue_style($this->id.'admin', $this->url('assets/css/admin.min.css'));
    
    // Custom CSS
    $this->addCustomCSS();
  }
  
  /**
   * Enqueue and register Login CSS files here.
   */
  public function enqueueLoginStyles() {
    // Common and Admin styles
    wp_enqueue_style($this->id.'common', $this->url('assets/css/common.min.css'));
    wp_enqueue_style($this->id.'login', $this->url('assets/css/login.min.css'));
    
    // Custom CSS
    $this->addCustomCSS();
  }
  
  /**
   * Enqueue and register Login JavaScript files here.
   */
  public function enqueueLoginScripts() {
    // Common and Admin JS
    wp_enqueue_script('jquery');
    wp_enqueue_script($this->id.'common', $this->url('assets/js/common.min.js'), false, '', true);
    wp_enqueue_script($this->id.'admin', $this->url('assets/js/login.min.js'), array($this->id.'common'), '', true);
  }
  
  /**
   * Enqueue and register Frontend JavaScript files here.
   */
  public function enqueueFrontendStyles() {
    // Common and Admin styles
    wp_dequeue_style('admin-bar');
    wp_enqueue_style('dashicons');
    wp_enqueue_style($this->id.'common', $this->url('assets/css/common.min.css'));
    wp_enqueue_style($this->id.'frontend', $this->url('assets/css/frontend.min.css'));
    
    // Custom CSS
    $this->addCustomCSS();
  }
  
  /**
   * We need to attach our css, saved on the DB to the actual css loaded across the plugin
   */
  public function addCustomCSS() {
    
    // Get custom CSS saved
    $css = get_option($this->id.'compiledCss');
    
    // Adicitonal CSS to login Screen
    $login = 'html {padding-top: 0px !important;}';
    
    // Check and append
    if ($css) { 
      wp_add_inline_style($this->id.'admin', $css);
      wp_add_inline_style($this->id.'login', $css.$login);
      wp_add_inline_style($this->id.'frontend', $css);
    }
    
  }
  
  /**
   * Here is where we create and manage our admin pages
   */
  public function adminPages() {}
  
  /**
   * Place code that will be run on first activation
   */
  public function onActivation() {
    global $ultimoSettings;
    
    // Check if activation exists
    $isActive = get_option($this->id.'-activated');
    
    if (!$isActive) {
      // var_dump($ultimoSettings);
      $this->runCompiler($ultimoSettings);
      update_option($this->id.'-activated', true);
    }
  }
  
  /**
   * Recomplie our custom scss generated to apply new Color Scheme, based on user options
   */
  public function runCompiler($options, $css = '') {
    
    // Get custom SASS
    ob_start();
    include $this->path('inc/color-scheme/color-scheme.php');
    $scss = ob_get_clean();
    
    // Carries our CSS
    $customCSS  = $this->compileSass($scss);
    $customCSS .= $css;
    
    // Saves our new compiled CSS
    update_option($this->id.'compiledCss', $customCSS);
    
  }
  
  /**
   * After ACF saves
   * @param mixed $post_id The post being save or, in our case, the option.
   */
  public function onSave($post_id) {
    if ($post_id === 'options') $this->runCompiler();
  }
  
  /**
   * Place code for your plugin's functionality here.  
   */
  public function Plugin() {
    
    // adds body class to our admin pages
    add_filter('admin_body_class', array($this, 'bodyClass'));
    
    // Remove Color Schemes from profile_personal_options
    add_action('admin_head', array($this, 'removeColorSchemes'));
    
    // Remove Tabs
    add_action('admin_head', array($this, 'removeHelpTab'));
    add_action('screen_options_show_screen', array($this, 'removeSOTab'), 10, 2);
    
    // Changes Footer Texts
    add_filter('admin_footer_text', array($this, 'footerLeft'));
    add_filter('update_footer', array($this, 'footerRight'), 11);

    // remove WP logo from adminbar
    add_action('wp_before_admin_bar_render', array($this, 'removeWPLogo'));

    // adds our custom site logo
    add_action('admin_bar_menu', array($this, 'customLogo'), 0);

    // Remove Howdy
    add_filter('admin_bar_menu', array($this, 'removeHowdy'), 25);
    
    // On Activation
    add_action('admin_init', array($this, 'onActivation'), 200);
    
  }
  
  /**
   * Adds custom body class, based on our theme
   */
  public function bodyClass($classes) {
    global $ultimoSettings;
    
    // Add new classes, if set
    if ($ultimoSettings['menu-separators']) $classes .= 'ultimo-separators ';
    if ($ultimoSettings['menu-icons'])      $classes .= 'ultimo-icons ';
    
    // Add theme
    $classes .= "ultimo-wp-{$ultimoSettings['preset']} ";
    
    return $classes.$this->id;
  }
  
  /* 
   * Remove howdy
   */ 
  function removeHowdy($wp_admin_bar) {
	global $ultimoSettings;
	  
    $my_account = $wp_admin_bar->get_node('my-account');

    $user = wp_get_current_user();
    
    // Randomly selects which greeting msg to display
    $total = count($ultimoSettings['welcome-text']) - 1;
    $which = rand(0, $total);
    
    $welcome = $ultimoSettings['welcome-text'][$which];

    $newtitle = sprintf(__('%s <strong>%s</strong> %s'), $welcome, $user->display_name, get_avatar($user->ID, 40));
    $wp_admin_bar->add_node( array(
      'id'    => 'my-account',
      'title' => $newtitle,
    ));
  }

  /*
   * Remove the WordPress Logo from the WordPress Admin Bar
   */
  public function removeWPLogo() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
  }

  public function customLogo() {
    global $wp_admin_bar, $ultimoSettings;

    // Check if title is image or text
    $title = ($ultimoSettings['logo-type'] == 'image') ? "<img class='indigo-logo' src='". $ultimoSettings['logo-img']['url'] ."'><img class='indigo-logo-mini' src='". $ultimoSettings['logo-img-mini']['url'] ."'>" : "<span class='indigo-logo'>{$ultimoSettings['logo-text']}</span><span class='indigo-logo-mini'>". substr($ultimoSettings['logo-text'], 0 , 1) ."</span>";
    
    $args = array(
        'id'    => 'my-site-logo',
        'title' => $title,
        'href'  => admin_url(),
        'meta'  => array(
		  'class' => "custom-site-logo wp-ui-notification text-{$ultimoSettings['logo-align']}",
		)
      );

    $wp_admin_bar->add_node($args);
  }
  
  /**
   * Footer Left
   */
  public function footerLeft($text) {
    global $ultimoSettings;
    return (empty($ultimoSettings['footer-left-text'])) ? $text : $ultimoSettings['footer-left-text'];
  }

  /**
   * Footer Right
   */
  public function footerRight($text) {
    global $ultimoSettings;
    return (empty($ultimoSettings['footer-right-text'])) ? $text : $ultimoSettings['footer-right-text'];
  }
  
  /**
   * Function that removes Help
   */
  public function removeHelpTab() {
    global $ultimoSettings;

    // if hide Help Tabs
    if (!$ultimoSettings['help-tabs']) {
      $screen = get_current_screen();
      $screen->remove_help_tabs();
    }
  }

  /**
   * Function that removes Screen Options
   */
  public function removeSOTab($display_boolean, $wp_screen_object) {
    global $ultimoSettings;
    
    // If hide Screen Options
    if (!$ultimoSettings['screen-options-tabs']) {
      $wp_screen_object->render_screen_layout();
      $wp_screen_object->render_per_page_options();
      return false;
    }
    
    else return true;
  }
  
  /**
   * Remove color scheme selector from users
   */
  public function removeColorSchemes() {
     global $_wp_admin_css_colors;
     $_wp_admin_css_colors = 0;
  }
  
}

/**
 * Finally we get to run our plugin.
 */
$UltimoWP = UltimoWP::init();
global $UltimoWP;