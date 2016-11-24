<?php

namespace Drupal\twig_module_theme\Controller;

use Drupal\Core\Controller\ControllerBase;

class TwigModuleTheme extends ControllerBase {

	public function renderTemplate(){
		$data_arr = array("One", "Two", "Three", "Four");
		return array("#theme" => "twig_module_theme", "#data" => $data_arr);
	}

}