<?php
session_start();
//puxa as informações do formulario=============================================
$login=$_POST["login"];
$password=$_POST["senha"];

if(!isset($login) || !isset($password)) {
    header("Location: index.php?error_login2=2"); 
    exit();
}else{
//puxa as informações do formulario=============================================


//conexão com o banco de dados//=======================================
$conexao=mysqli_connect("localhost","root","","redesocial");
//conexão com o banco de dados//=======================================


//verifica se a conta existe e redireciona===================================================
$verificar="SELECT * from usuarios where login='$login' and senha='$password'";
$query = mysqli_query($conexao, $verificar);
$fetch_array = mysqli_num_rows($query);

if($fetch_array==1) {
    $_SESSION['user']=$login;
    header("Location:inicio.php");
    
    
} else {
    header("Location: index.php?error_login1=1");
}
//verifica se a conta existe e redireciona===================================================

}

?>




















