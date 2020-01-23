<?php

define("EXM_DIVI_CLASSES", array(
	// Beaver Builder
	"TMA\ExperienceManager\Divi\DiviBuilder_Integration" => "includes/modules/editors/divi/class.divibuilder_integration.php",
	"TMA\ExperienceManager\Divi\Plugins" => "includes/class.plugins.php",
	
));

function tma_webtools_divi_autoload($class_name) {
	if (array_key_exists($class_name, EXM_DIVI_CLASSES)) {
		require_once TMA_EXPERIENCE_MANAGER_DIVI_DIR . "/" . EXM_DIVI_CLASSES[$class_name];
	}
}

spl_autoload_register('tma_webtools_divi_autoload');
