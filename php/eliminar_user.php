<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

}else{
    echo "<script> alert('Debes de iniciar sesión.'); </script>";
    header("Refresh:0; url=op-1-2-3.html");
exit;
}
$now = time();

if($now > $_SESSION['expire']) {
    session_destroy(); //destruyendo la variable session_start();
    header("Refresh:0; url=op-1-2-3.html");
exit;
}
?>
<?php

if(!isset($_GET["id"])) exit();
$id = $_GET["id"];

include_once "../bd/base_de_datos.php";

$sentencia = $base_de_datos->prepare("DELETE FROM usuarios WHERE id = ?;");
$resultado = $sentencia->execute([$id]);

if($resultado === TRUE){
    echo "<script>alert('[!] Usuario Eliminado ...');</script>";
    header("refresh:0; url=vista_user.php");
}
else{
    echo "<h2>► A Ocurrido un Error !!! Verifica con el Administrador</h2>";
}
?>