<?php
/**
 * Created by PhpStorm.
 * User: Tebiih
 * Date: 26-05-2016
 * Time: 22:49
 */

    if($_POST){
        $usuario = new Usuarios();
        $login = $_POST['txtLogin'];
        $pass = $_POST['txtPass'];
        $usuario->setLoginUsuario($login);
        $usuario->setClave($pass);
        
        $resultado = $usuario->validarUsuario();
        $messageLogin = "";
        if($resultado == -1){
            $messageLogin = "Usuario No Existe";
            
        }
        elseif($resultado == 0){
            $messageLogin = "Contraseña Invalida";
        }
        else{
            session_start();
            $_SESSION['categoriaUsuario'] = $resultado;
            $_SESSION['nickname'] = $login;
            if($resultado == 1)
                headers('Location: mantenedores.php');
            else
                header('Location: crearPublicacion.php');
        }
    }
    else{
        $messageLogin = "";
    }



?>