<?php



require('usuario.php');

if (isset($_POST)) {

    $usuario = new usuario();
    $conexion=$usuario->getConexion();
    $usuario=$usuario->loginUsuario($conexion);

    
}
?>
<form method ="post">
<input type="text" name="username" placeholder="username"><br><br>
<input type="password" name="password" placeholder="contraseña"><br><br>
<input type="submit" name="submit" value="Registrar"><br>


</form>