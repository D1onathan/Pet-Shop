		<?php

	class Clientes extends Model{

		function listar($ordem = 'Nome', $sentido = 'asc'){
	
			$sql = $this->pdo->prepare("select * from clientes order by $ordem $sentido");
 	        $sql->execute();

         	return $sql;
		}

		function buscar(){
			echo "Buscando cliente. ";
		}

		function salvar($nome){



			try{
		
					$sql = $this->pdo->prepare("INSERT INTO	clientes (Nome) VALUES(?)");

			
					$sql->execute([$nome]);
						

			
					echo "<small>Linhas inseridas na base de dados:" .$sql->rowCount()."</small>";
			
				} catch(PDOException $e) {
			

			
					echo 'Erro: ' . $e->getMessage();
			
				}
		}


		function atualizar(){


			echo "Atualizando dados do cliente. ";

		}


		function deletar($id = null){
								
			if($id == null){
			   	echo "Não é permitido apagar toda a base de dados. ";
			   	die();
			}
							

				
			try{

				     	$sql=$this->pdo->prepare("delete from clientes where id=?");
							
				     	
				
				     	$sql->execute([$id]);
						
				     	
				
				     	echo "<small>Linhas deletadas:"	.$sql->rowCount()."</small>";
				     	echo "<br><a href='/'>Voltar.</a>";
							
			} catch(PDOException $e) {
						
				     	echo 'Erro: ' . $e->getMessage();
				
			}
				
		}

}
