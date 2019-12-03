<?php

session_start();

//puxa as informações do formulario//
$nome=$_POST["nome"];
$sobrenome=$_POST["sobrenome"];
$email=$_POST["email"];
$login=$_POST["login"];
$password=$_POST["senha"];
$confirmSenha=$_POST["confirmarSenha"];
$nascimento=$_POST["nascimento"];
$ddd=$_POST["ddd"];
$celular=$_POST["celular"];




//ERROS===========================================================================//
if(empty($nome)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(empty($sobrenome)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(empty($email)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(empty($login)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(empty($password)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(empty($confirmSenha)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(empty($nascimento)){
     $empty="Preencha todos os campos para se cadastrar";
}
if(empty($ddd)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(empty($celular)){
    $empty="Preencha todos os campos para se cadastrar";
}
if(isset($empty)){
    header("Location: cadastro.php?error_cadastro1=1");
    exit();
}
//ERROS==============================================================================//


//conexão com o banco de dados//=======================================
$conexao=mysqli_connect("localhost","root","","redesocial");
//conexão com o banco de dados//=======================================

$inserir="INSERT INTO usuarios (nome,sobrenome,email,login,senha,nascimento,telefone,cidade) 
VALUES ('$nome','$sobrenome','$email','$login','$password','$nascimento','$ddd','$celular')";
$verificar="SELECT * FROM usuarios where login='$login'";

$query=mysqli_query($conexao,$verificar);
$fetch_array = mysqli_num_rows($query);

if($fetch_array==1){
    header("Location:cadastro.php?error_cadastro2=2");
   
}else{
    $query=mysqli_query($conexao,$inserir);
     header("Location:inicio.php");
}

//conexão com o banco de dados//=======================================



?>