<?php
/**
 * Created by PhpStorm.
 * User: E padawan Rivas
 * Date: 26-05-2016
 * Time: 17:13
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bloogger</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<div class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp;INICIO</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a><span class="glyphicon glyphicon-pencil"></span>&nbsp;Nuevo Comentario</a></li>
            <?php
                if(isset($_SESSION['categoriaUsuario'])){
                    if($_SESSION['categoriaUsuario']==1)
                        $visible = "false";
                    else
                        $visible = "true";
            ?>
            <li hidden="<?php $visible ?>"><a><span class="glyphicon glyphicon-pencil"></span>&nbsp;Mantenedores</a></a></li>
            <?php
               }
            ?>

        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="registro.php"><span class="glyphicon glyphicon-user"></span> Registrarse</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Iniciar Session</a></li>
        </ul>
    </div>
</div>
<br><br><br>
