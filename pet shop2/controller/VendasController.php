<?php
  require 'model/Vendas.php';



	class VendaController {

		function listar(){

	
			$Vendas = new Vendas();

			
			$vendas = $Vendas->listar();

	
			require 'view/vendas.php';

		}

		function inserir(){
			if(isset($_POST['Nome'])){
				$Vendas = new Vendas();
                $venda = $Vendas->salvar($_POST['Nome']);
				$vendas = $Vendas->listar('id','desc');

				header('Location: /pet shop2/');

			}

		}

		function deletar(){

			 	$id = $_GET['id'];
		
			 	$Vendas = new Vendas();
	    	 	$Vendas->deletar($id);
			 	header('Location: /pet shop2/');
			
			  }

	}