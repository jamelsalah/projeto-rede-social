
<?php
session_start();
if(isset($_SESSION['user'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    
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
.option:hover{
    background-color: #c62d1f;

}

    
    
    </style>
</head>
<body style="font-family:calibri; display: flex;flex-direction: column; justify-content: center;background-color: white;">

        <div style="display: flex; flex-direction: row; justify-content: center;">
            <h1 style="font-family:calibri; display: flex; flex-direction: row; font-size:80px;margin-top:0px; margin-bottom:0px;">
                <div style="color:black;">rede</div>
                <div style="color:red;">social</div>
            </h1>
        </div>
    

        <div style="display: flex;  width:97%;flex-direction: column; height:1000px; background-color:white;box-shadow: 0px 0px 5px rgba(66,66,66,.75); margin:auto;">

            <div style="display: flex; justify-content: center; width:100%; height: 4%; background-color: whitesmoke;box-shadow: 0px 0px 5px rgba(66,66,66,.75); ">
                

               <form method="POST" action="listar.php">
                   <input type="search" name="search" class="css-input" style="width:500px;"/> 
                   <input type="submit" name="search" class="myButton" value="Buscar "/>
               </form>

            </div>
            <div style="display: flex; flex-direction: row; margin:5px; ">
                <div style="display: flex;flex-direction: column ;border:1px solid black;">
                    <div style="">
                        <img src="user.jpg" style=""/>
                    </div>
                    <div>
                        <div><form action="editar_perfil.php"><input class=" options" type="submit" value="editar perfil" style="width:100%;"/> </div>
                        <div ><a href="" style="text-align: center;">vrau</a></div>
                        <div><a href="?sair=end">Sair</a></div>
                        <div><a href="ExcluirConta.php">Excluir conta</a></div>
                        <div></div>
                        <div></div>

                    </div>

                </div>
            </div>
       
        </div>
    

    
</body>
</html>
<?php
}else{
    header("Location:index.php");
}
if(@$_GET['sair']){
    unset($_SESSION['user']);
    echo "<meta http-equiv='refresh' content='0,./'>";
}

?>