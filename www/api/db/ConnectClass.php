<?php

class ConnectClass{

    var $Connection;

    public function openConnect(){
       $serverName = 'db';
       $userName = 'pw';
       $password = 'pw123';
       $dbName = 'pw_exemple';

       $this -> Connection = new mysqli($serverName, $userName, $password, $dbName);

        if($this -> Connection -> connect_error){
            die("Conexão com o Banco de Dados falhou -> ". $this -> Connection -> connect_error);
        }
       
    }
    public function getConn(){
        return $this -> Connection;
    }
}