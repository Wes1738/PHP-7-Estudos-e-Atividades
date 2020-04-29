<?php

 abstract class ClassConexao {

    //Realizará a conexão com o Banco de Dados
    protected function conectaDB()
    {
        try {

            $Con = new PDO("mysql:host=localhost;dbname=crud", "root", "");
            return $Con;

        } catch (PDOException $Erro) {
            
            return $Erro->getMessage();
        
        }
    }

}