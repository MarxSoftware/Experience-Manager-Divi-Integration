<?php
/*
  Plugin Name: Experience Manager Divi integration
  Plugin URI: https://wp-digitalexperience.com/experience-manager/
  Description: The integration for the experience platform.
  Author: Thorsten Marx
  Version: 1.0.0
  Author URI: https://wp-digitalexperience.com/
 */
if (!defined('ABSPATH')) {
	exit;
}

define("TMA_EXPERIENCE_MANAGER_DIVI_VERSION", "1.0.0");

define("TMA_EXPERIENCE_MANAGER_DIVI_DIR", plugin_dir_path(__FILE__));
define("TMA_EXPERIENCE_MANAGER_DIVI_URL", plugins_url('/', __FILE__));

require_once 'exm-divi-autoload.php';
require_once 'includes/tma_divi_functions.php';

add_action("plugins_loaded", "exm_divi_plugins_loaded");


function exm_divi_plugins_loaded() {
	tma_exm_log("load editor plugins");

	
	if (\TMA\ExperienceManager\Divi\Plugins::getInstance()->beaverBuilder()) {
		new \TMA\ExperienceManager\Divi\DiviBuilder_Integration();
	}
}