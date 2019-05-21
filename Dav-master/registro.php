<?php 

require('usuario.php');

if (isset($_POST)) {

    $usuario = new usuario();
    $conexion=$usuario->getConexion();
    $usuario=$usuario->registrarUsuario($conexion);

    
}
?>

    <form method ="post">
        <input type="text" name="nombre" placeholder="nombre"><br><br>
        <input type="email" name="email" placeholder="email"><br><br>
        <input type="password" name="password" placeholder="contraseña"><br><br>
        <input type="submit" value="Registrar"><br>

    
    </form>


