<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container; //estancia modelos, chama o banco

class AppController extends Action {

	public function timeline(){
		session_start();

			if($_SESSION['id'] != '' && $_SESSION['nome'] ){
			$this->render('timeline');


			}else{
				header('location: /?login=erro');
			}


		
			}



}