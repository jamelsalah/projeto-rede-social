<?php
session_start();
if(!isset($_SESSION['user'])){
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>formulario</title>
    
    <style>
        body {
            margin: 0px;
        }
        header {
            background-color: #ccc;
            display: flex;
            flex-direction: row;
            justify-content:flex-end;
            padding: 10px;
            margin: 0px;
            
        }
        .container {
            display: flex;
            flex-direction: row;
            margin: 0px auto;
            width: 80%;
            justify-content: center;
            margin-top: 70px;
        }
        .container2 {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            justify-content: center;
        }
        .formulario {
            display: flex;
            justify-content: center;
            flex-direction: column;
        }
        img {
            width: 300px;
            height: 300px;
        }
        .botoes {
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #f5978e;
	-webkit-box-shadow:inset 0px 1px 0px 0px #f5978e;
	box-shadow:inset 0px 1px 0px 0px #f5978e;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c62d1f));
	background:-moz-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background:-webkit-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background:-o-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background:-ms-linear-gradient(top, #f24537 5%, #c62d1f 100%);
	background:linear-gradient(to bottom, #f24537 5%, #c62d1f 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c62d1f',GradientType=0);
	background-color:#f24537;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
    margin: 3px 4px;
}

.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537));
	background:-moz-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background:-webkit-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background:-o-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background:-ms-linear-gradient(top, #c62d1f 5%, #f24537 100%);
	background:linear-gradient(to bottom, #c62d1f 5%, #f24537 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537',GradientType=0);
	background-color:#c62d1f;
}
.myButton:active {
	position:relative;
	top:1px;
}

    .css-input {
     padding: 5px;
     font-size: 16px;
     border-width: 1px;
     border-color: #CCCCCC;
     background-color: #FFFFFF;
     color: #000000;
     border-style: solid;
     border-radius: 0px;
     box-shadow: 0px 0px 5px rgba(66,66,66,.75);
     text-shadow: 0px 0px 5px rgba(66,66,66,.75);
}
 .css-input:focus {
     outline:none;
}
    </style>
</head>

<body>
    

    <div class="container">
        <div class="container2">
            <div class="imagem">
                    <img class="img" src="redeSocial.jpg" />
            </div>
            <div class="formulario">
                <form name="login" method="POST" action="loginAction.php">
                    <input class="css-input" placeholder="Login..." type="text" name="login" size="20" maxlength="30" required/><br /><br />

                    <input class="css-input" placeholder="Senha..." type="password" name="senha" size="20" maxlength="30" required/><br /><br />
                    <span style="margin-left:13px;color:red;"><?php
                        if(isset($_GET['error_login1'])) {
                            $empty_user="Usuario ou senha incorretos";
                            echo $empty_user;
                            unset($empty_user);
                        }
                        if(isset($_GET['error_login2'])){
                            $error2="preencha os campos para logar";
                            echo $error2;
                            unset($error2);

                        }
                        ?></span>
                    <div>
                        <div class="botoes">
                        <input class="myButton" type="submit" value="Login" />
                        <input class="myButton" type="reset" value="Limpar" />
                        </div>

                        <div>
                            <a style=" width:71.5%; text-align: center;" class="myButton" href="cadastro.php">Cadastrar-se</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php
}else{
    header("Location:inicio.php");

}
?>