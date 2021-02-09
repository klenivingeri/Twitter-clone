<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap {

	protected function initRoutes() {

		$routes['home'] = array(
			'route' => '/', // PEGA URL
			'controller' => 'IndexController',  //NOME DOS ARQUIEVOS
			'action' => 'index' //PAGINA
		);

		$routes['inscreverse'] = array(
			'route' => '/inscreverse',
			'controller' => 'IndexController',
			'action' => 'inscreverse'
		);

		$routes['registrar'] = array(
			'route' => '/registrar',
			'controller' => 'IndexController',
			'action' => 'registrar'
		);

		$routes['autenticar'] = array(
			'route' => '/autenticar',
			'controller' => 'AuthController',
			'action' => 'autenticar'
		);

		$routes['timeline'] = array(
			'route' => '/timeline', //PEGA DO NAVEGADOR
			'controller' => 'AppController', //NOME DOS ARQUIEVOS
			'action' => 'timeline' 
		);

		$routes['sair'] = array(
			'route' => '/sair', //PEGA DO NAVEGADOR
			'controller' => 'AuthController', //NOME DOS ARQUIEVOS
			'action' => 'sair' 
		);



		$this->setRoutes($routes);
	}

}

?>