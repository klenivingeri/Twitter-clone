<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container; //estancia modelos, chama o banco

class AuthController extends Action {

	public function autenticar(){

		$usuario = Container::getModel('Usuario');
		$usuario->__set('email', $_POST['email']);
		$usuario->__set('senha', $_POST['senha']);

		/*echo '<pre>';
		print_r($usuario);
		echo '</pre>';*/

		$usuario->autenticar();
		// se o nome e o id do usuario existir no banco, o usuario é autenticado
		if($usuario->__get('id') != '' && $usuario->__get('nome')){
			
			session_start();
			$_SESSION['id'] = $usuario->__get('id');
			$_SESSION['nome'] = $usuario->__get('nome');
			header('location: /timeline');



		}else{
			echo 'Erro na autenticação';
			header('location: /?login=erro');
		}

	}

	public function sair(){
		session_start();
		session_destroy();
		header('location:/');

	}



}
?>