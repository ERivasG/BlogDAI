<?php
/**
 * Created by PhpStorm.
 * User: E padawan Rivas
 * Date: 26-05-2016
 * Time: 17:34
 */
include_once('Elements/top.php');
?>
    <div align="center" class="panel panel-warning">
        <div class="panel-heading"><h3>FORMULARIO DE REGISTRO</h3></div>
        <div class="panel-body">
            <form method="POST" action="index.php">
            <div>
                <table>
                    <tr>
                        <td><label>Nickname: </label></td>
                        <td><input class="form-control" type="text" name="userName" required></td>
                    </tr>
                    <tr>
                        <td><label>Nombre: </label></td>
                        <td><input class="form-control" type="text" name="userName" required></td>
                    </tr>
                    <tr>
                        <td><label>Apellido: </label></td>
                        <td><input class="form-control" type="text" name="userName" required></td>
                    </tr>
                    <tr>
                        <td><label>Contraseña: </label></td>
                        <td><input class="form-control" type="password" name="userName" required></td>
                    </tr>
                    <tr>
                        <td><label>Repetir Contraseña: </label></td>
                        <td><input class="form-control" type="password" name="userName" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" class="btn btn-success" value="Registrase">
                            <input type="button" class="btn btn-info" value="Limpiar">
                        </td>
                    </tr>
                </table>
            </div>
            </form>
        </div>
    </div>

<?php
    include_once('Elements/footer.php')
?>
