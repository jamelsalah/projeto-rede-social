<?php
//puxa as informações do formulario//
$login=$_POST["login"];
$password=$_POST["senha"];

echo $login. "<br/>".$password;

//conexão com o banco de dados//=======================================
$servidor="localhost";
$usuario="root";
$senha="";
$dbname="redesocial";

$conexao=mysqli_connect($servidor,$usuario,$senha,$dbname);
$inserir="INSERT INTO login (login,senha) VALUES ('$login','$password')";

mysqli_query($conexao,$inserir);
//conexão com o banco de dados//=======================================






?>