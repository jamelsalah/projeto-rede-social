<?php
session_start();

//conexão com o banco de dados//=======================================
$conexao=mysqli_connect("localhost","root","","redesocial");
//conexão com o banco de dados//=======================================

$senha=$_POST['senha'];
$user=$_SESSION['user'];

if(empty($senha)){
    header("Location:ExcluirConta.php?Digite_sua_senha");
    exit();
}

$verificar="SELECT * from usuarios where login='$user' and senha='$senha'";
$query = mysqli_query($conexao, $verificar);
$fetch_array = mysqli_num_rows($query);



if($fetch_array==1){
    $excluir="DELETE  from usuarios where login='$user'";
    $query2 = mysqli_query($conexao, $excluir);
    unset($_SESSION['user']);
    header("Location:index.php");
}else{
    header("Location:ExcluirConta.php?Senha_incorreta");
    $_SESSION['senhaIncorreta']="Senha incorreta";
}

?>