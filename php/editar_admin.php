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
$sentencia = $base_de_datos->prepare("SELECT * FROM admins WHERE id = ?;");
$sentencia->execute([$id]);
$solicitud = $sentencia->fetch(PDO::FETCH_OBJ);
if($solicitud === FALSE){
	echo "¡No existe alguna solicitud con ese ID!";
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Productos/SHOP-Icon.png">
    <link rel="stylesheet" href="../css/hoja_estilo.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title>★ Editar Admin</title>
</head>
<body>
<script src="../js/logout.js"></script>
    </div>
<a class="unk">000000</a>
<a class="unk">000000</a>
<a class="unk">000000</a>
<a class="unk">000000</a>
<a class="unk">000000</a>
<a class="unk">000000</a>
    <img src="../Productos/EDA.png" class="A-C450X3">
    <div class="A0">
    </div>
        <table>
            <thead>
                <tr>
             <td>USUARIO:</td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <td> ★★★ </td>
             <a href="cerrar_sesion.php" class="A-1" onclick="cerrar_sesion()">|CERRAR SESION|</a>
             <td><a href="admin.php"><div><img src="../Productos/back.png" class="imagen-boton1"></div></a></td>
               </tr>
               </thead>
        </table>
    </div>

    <br><br>
    
            <form action="actualizar_informacion.php" method="post" class="formulario-editar">
                <div class="id">
        <a class="unk">&</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
                    <label for="">No. Identificador</label>
                    <br>
        <a class="unk">&</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        
                    <input type="text" value="<?php echo $solicitud->id ?>" name="id" id="" class="input-formulario-id" readonly>
                </div>
                <div class="nombrec">
        <a class="unk">&</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
                    <label for="">Nombre Completo</label>
                    <br>
        <a class="unk">&</a>            
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        
                    <input type="text" value="<?php echo $solicitud->nombrec?>" name="nombrec" id="" class="input-formulario">
                </div>
                <div class="fecha">
        
                    <label for="">Fecha</label>
                    <br>
                    <input type="date" value="<?php echo $solicitud->fecha?>" name="fecha" id="" class="input-formulario">
                </div>
                <div class="correo">
        <a class="unk">&</a>            
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
                    <label for="">Correo Electronico</label>
                    <br>
        <a class="unk">&</a>            
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
                    <input type="email" value="<?php echo $solicitud->correo?>" name="correo" id="" class="input-formulario">
                </div>
                <div class="pass">
                    <label for="">Contraseña</label>
                    <br>
                    <input type="text" value="<?php echo $solicitud->pass?>" name="pass" id="" class="input-formulario">
                </div>
                <div class="correo">
        <a class="unk">&</a>            
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
                    <label for="">Telefono</label>
                    <br>
        <a class="unk">&</a>            
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
                    <input type="tel" value="<?php echo $solicitud->tel?>" name="tel" id="" class="input-formulario">
                </div>
                <div class="pass">
                    <label for="">Usuario</label>
                    <br>
                    <input type="text" value="<?php echo $solicitud->u?>" name="u" id="" class="input-formulario">
                </div>
                <br><br>
                <a class="unk">&</a>            
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        <a class="unk">000000</a>
        
                    <input type="submit" value="Actualizar Información" class="enlace">
                </div>
            </form>
        </div>
    </div>
</body>
</html>