<?php
  require 'model/Clientes.php';



	class ClienteController {

		function listar(){

	
			$Clientes = new Clientes();

			
			$clientes = $Clientes->listar();

	
			require 'view/clientes.php';

		}

		function inserir(){
			if(isset($_POST['Nome'])){
				$Clientes = new Clientes();
                $cliente = $Clientes->salvar($_POST['Nome']);
				$clientes = $Clientes->listar('id','desc');

				header('Location: /pet shop2/');

			}

		}

		function deletar(){

			 	$id = $_GET['id'];
		
			 	$Clientes = new Clientes();
	    	 	$Clientes->deletar($id);
			 	header('Location: /pet shop2/');
			
			  }

	}
