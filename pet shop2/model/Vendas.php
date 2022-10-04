<?php

	class Vendas extends Model{

		function listar($ordem = 'nome', $sentido = 'asc'){
	
			$sql = $this->pdo->prepare("select * from vendas order by $ordem $sentido");
 	        $sql->execute();

         	return $sql;
		}

		function buscar(){
			echo "Buscando venda. ";
		}

		function salvar($nome){



			try{
		
					$sql = $this->pdo->prepare("INSERT INTO	vendas (nome) VALUES(?)");

			
					$sql->execute([$nome]);
						

			
					echo "<small>Linhas inseridas na base de dados:" .$sql->rowCount()."</small>";
			
				} catch(PDOException $e) {
			

			
					echo 'Erro: ' . $e->getMessage();
			
				}
		}


		function atualizar(){


			echo "Atualizando dados da venda. ";

		}


		function deletar($id = null){
								
			if($id == null){
			   	echo "Não é permitido apagar toda a base de dados. ";
			   	die();
			}
							

				
			try{

				     	$sql=$this->pdo->prepare("delete from vendas where id=?");
							
				     	
				
				     	$sql->execute([$id]);
						
				     	
				
				     	echo "<small>Linhas deletadas:"	.$sql->rowCount()."</small>";
				     	echo "<br><a href='/'>Voltar.</a>";
							
			} catch(PDOException $e) {
						
				     	echo 'Erro: ' . $e->getMessage();
				
			}
				
		}

}