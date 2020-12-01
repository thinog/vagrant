<?php
echo "O Puppet funcionou, amigo! <br> Conectando com banco de dados... <br>";

$server = "192.168.15.27";
$user = "mysqluser";
$pass = "pass";

$connection = new mysqli($server, $user, $pass);

if($connection->connect_error){
    die("Conexão falhou: " . $connection->connect_error);
}

echo "Conexão com MySQL realizada com sucesso!";