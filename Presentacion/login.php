<?php
/**
 * Created by PhpStorm.
 * User: Tebiih
 * Date: 26-05-2016
 * Time: 23:17
 */
require_once ('Elements/top.php');
require_once ('../Datos/Usuarios.php');
require_once ('../Negocio/Usr_ValidarUsuario.php');

?>
<script>
</script>

<div align="center" class="panel panel-success">
    <div class="panel-heading"><h3>Inicio Sesion</h3></div>
    <div class="panel-body">
        <form method="POST" action="login.php">
            <table>
                <?php
                if($messageLogin==""){

                }
                else{
                ?>
                <div class="alert alert-info">
                   <?php $messageLogin?>
                </div>
                <?php
                }
                ?>
                <tr>
                    <td>Nickname</td>
                    <td><input type="text" class="form-control" name="txtLogin"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="form-control" name="txtPass"></td>
                </tr>
                <tr>
                    <td><a>¿Olvido Su Contraseña?</a></td>
                    <td><input type="submit" class="btn btn-success" value="Iniciar Sesión"></td>
                </tr>
            </table>
        </form>
    </div>
</div>

<?php
    require_once ('Elements/footer.php');
?>
