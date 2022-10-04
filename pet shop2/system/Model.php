<?php

class Model
{
    // dados de acesso
    private $usuario = 'root';
    private $senha = '';
    private $host = '127.0.0.1';
    private $porta = '3306';
    private $base = 'pet shop';

    protected $pdo;

    function __construct() 
    {

        try {
         
            $this->pdo = new PDO(
                "mysql:host=$this->host;
                 port=$this->porta;
                 dbname=$this->base",
                $this->usuario,
                $this->senha
            );

            $this->pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

           
            
        } catch (PDOException $e) {

            echo 'Error: ' . $e->getMessage();
        }
    }
}
