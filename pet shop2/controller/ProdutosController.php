<?php
  require 'model/Produtos.php';


	class ProdutosController {

		function listar(){

		
			$Produtos = new Produtos();

			
			$produtos = $Produtos->listar();

		
			require 'view/produtos.php';

		}

		function inserir(){
			if(isset($_POST['nome'])){
				$Produtos = new Produtos();
                $produto = $Produtos->salvar($_POST['nome']);
				$produtos = $Produtos->listar('id','desc');

				header('Location: /pet shop2/');

			}

		}

		function deletar(){

			 	$id = $_GET['id'];
		
			 	$Produtos = new Produtos();
	    	 	$Produtos->deletar($id);
			 	header('Location: /pet shop2/');
			
			  }

	}
