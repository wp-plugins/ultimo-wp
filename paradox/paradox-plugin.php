<?php

// Prevents class redeclaration
if (!class_exists('ParadoxPlugin')) :

/**
 * Loads our incredibily awesome Paradox Framework, which we are going to use a lot.
 */
require 'vendor/autoload.php';

/**
 * Our plugin starts here
 *
 * MaterialAdmin is a WordPress plugin that completly transforms your WordPress admin interface, giving it a 
 * awesome and beautful Google Material Design interface.
 */
class ParadoxPlugin {

  /**
   * @property object $instance Our instance that allow us to only instantiate this class once.
   */
  public static $instance;
  
  /**
   * @property string $textDomain Our plugin textdomain, used across the app.
   */
  public $textDomain;
  
  /**
   * @property string $id Unique indentifier of our plugin. This is used to save options and generate admin views.
   */
  public $id;
  
  /**
   * @property string $file Contiain the path to main plugin file.
   */
  public $file;
  
  /**
   * @property string $path The plugin absolute path.
   */
  public $path;
  
  /**
   * @property string $url The plugin URL.
   */
  public $url;
  
  /**
   * @property bool $debug Either or not to display debuuging information and or menus.
   */
  public $debug = false;
  
  /**
   * @property object $adminController The instance of our SASS compiler.
   */
  public $sass;
  
  /**
   * Initializes the plugin adding all important hooks and generating important instances of our framework.
   */
  public function __construct() {

    // Set PATH and URL
    $this->path = plugin_dir_path($this->file);
    $this->url  = plugin_dir_url($this->file);

    // Load text domain
    load_plugin_textdomain($this->textDomain, false, $this->path.'/lang');

    // Instantiate our SASS manager
    $this->sass = new scssc();
    
    // Adds Backend scripts and styles
    add_action('admin_enqueue_scripts', array($this, 'enqueueAdminScripts'));
    add_action('admin_enqueue_scripts', array($this, 'enqueueAdminStyles'));
    
    // Adds Frontend scripts and styles
    add_action('wp_enqueue_scripts', array($this, 'enqueueFrontendScripts'));
    add_action('wp_enqueue_scripts', array($this, 'enqueueFrontendStyles'));
    
    // Adds Login scripts ans styles
    add_action('login_enqueue_scripts', array($this, 'enqueueLoginScripts'));
    add_action('login_enqueue_scripts', array($this, 'enqueueLoginStyles'));
    
    // Adds our custom Admin pages hook
    add_action('init', array(&$this, 'adminPages'));
    
    // Run our plugin as soon as possible
    add_action('init', array(&$this, 'Plugin'), 0);
  }
  
  /**
   * UTILITY BELT
   * This is one of the single most important parts of the framework, a utility belt that makes much easier to 
   * get assets, paths, urls, add Advanced Custom Fields and etc.
   */
  
  /**
   * Return absolute path to some plugin subdirectory
   * @return string Absolute path
   */
  public function path($dir) {
    return $this->path.$dir;
  }
  
  /**
   * Return url to some plugin subdirectory
   * @return string Url to passed path
   */
  public function url($dir) {
    return $this->url.$dir;
  }
  
  /**
   * Return full URL relative to some file in assets
   * @return string Full URL to path
   */
  public function getAsset($asset, $assetsDir = 'img') {
    return $this->url("assets/$assetsDir/$asset");
  }
  
  /**
   * Render Views
   * @param string $view View to be rendered.
   * @param Array $vars Variables to be made available on the view escope, via extract().
   */
  public function render($view, $vars = false) {
    // Make passed variables available
    if (is_array($vars)) extract($vars);
    // Load our view
    include $this->path("views/$view.php");
  }
  
  /**
   * Compile SASS code
   * @param string $sass SASS to be compiled
   * @return string Compiled CSS
   */
  public function compileSass($sass) {
    return $this->sass->compile($sass);
  }
  
  /**
   * Add ACF if need as a dependencie
   */
  public function addACF() {
    
    // Change Path
    add_filter('acf/settings/path', array($this, 'acfPath'));
    
    // Change Dir
    add_filter('acf/settings/dir', array($this, 'acfDir'));
    
    // Hide UI, if debug is off
    if ($this->debug === false) add_filter('acf/settings/show_admin', '__return_false');
    
    // Load Plugin Core
    include_once $this->path('paradox/inc/acf/acf.php');
    
  }
  
  /**
   * Change ACF Path
   */
  public function acfPath() {
    return $this->path('paradox/inc/acf/');
  }
  
  /**
   * Change ACF Dir
   */
  public function acfDir() {
    return $this->url('paradox/inc/acf/');
  }
  
  /**
   * Wrapper method to the ACF get field function
   * @param string $field The name of the field.
   * @param bool $display Either or not to display the content.
   */
  public function getField($field, $display = false) {
    return $display ? the_field($field, 'option') : get_field($field, 'option');
  }
  
  /**
   * Wrapper method to the ACF update field function
   * @param string $field The name of the field.
   * @param bool $value The new value of the field.
   */
  public function updateField($field, $value) {
    return update_field($field, $value, 'option');
  }
  
  /**
   * SCRIPTS AND STYLES
   * The section bellow handles the adding of scripts and css files to the different hooks WordPress offers
   * such as Admin, Frontend and Login. Calling anyone of these hooks on the child class you automaticaly 
   * add the scripts hooked to the respective hook.
   */
  
  /**
   * Enqueue and register Admin JavaScript files here.
   */
  public function enqueueAdminScripts() {}
  
  /**
   * Enqueue and register Admin CSS files here.
   */
  public function enqueueAdminStyles() {}
  
  /**
   * Enqueue and register Frontend JavaScript files here.
   */
  public function enqueueFrontendScripts() {}
  
  /**
   * Enqueue and register Frontend CSS files here.
   */
  public function enqueueFrontendStyles() {}
  
  /**
   * Enqueue and register Login JavaScript files here.
   */
  public function enqueueLoginScripts() {}
  
  /**
   * Enqueue and register Login CSS files here.
   */
  public function enqueueLoginStyles() {}
  
  /**
   * IMPORTANT METHODS
   * Set bellow are the must important methods of this framework. Without them, none would work.
   */
  
  /**
   * Here is where we create and manage our admin pages
   */
  public function adminPages() {}
  
  /**
   * Place code for your plugin's functionality here.
   */
  public function Plugin() {}

}

endif;