<?php 

/**
 *	@file
 * 	Contains \Drupal\cm1\Controller\Controller1 class
 */

namespace Drupal\cm1\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * 	Returns responses for Custom Module - cm1 
 */

class Controller1 extends ControllerBase {
	
	public function customPageContent() {
		return array(
			'#markup' => t('This page is part of a Custom Module and has been designed as a requirement in an exercise and as a method for practice. Creation of this page requires multiple actions:
				<p>
				<ul>
					<li>Creating a controller to manipulate the content of the page.</li>
					<li>Creating a route to render the page using controller in [module_name].routing.yml file.</li>
				</ul>
				</p>
				This page displays static content which is parsed by the controller as an associative array called Render Array. To display the content of this page, one can set the path of the target to "/custom-page1"'),
			);


	}

}




















 ?>