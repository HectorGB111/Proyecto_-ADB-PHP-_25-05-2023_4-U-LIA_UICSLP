<?php
session_start(); /*Creamos sesiones de trabajo*/
?>
<?php
$u = $_POST['user'];
$correo = $_POST['user'];
$pass = $_POST['password'];

$conexion = mysqli_connect("localhost","root","","proyecto");
$consulta = "SELECT *
             FROM usuarios
             WHERE u = '$u' OR correo = '$correo'
             AND pass = '$pass'";

$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0){
    $_SESSION['loggedin'] = true;
    $_SESSION['user'] = $u;
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (10 * 60); //10 minutos
if($u == TRUE){
    header("location:../extras/op-1-2-3.html");
}
}
else{
    header("Refresh:0; url=login.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);