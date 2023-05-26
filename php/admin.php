<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {

}else{
    echo "<script> alert('Debes de iniciar sesión.'); </script>";
    header("Refresh:0; url=login.html");
exit;
}
$now = time();

if($now > $_SESSION['expire']) {
    session_destroy(); //destruyendo la variable session_start();
    header("Refresh:0; url=admin.php");
exit;
}
?>
<!-- Documento de seleccionar la tabla de datos -->
<?php
include_once "../bd/base_de_datos.php";
$sentencia = $base_de_datos->query("SELECT * FROM admins;");
$solicitudes = $sentencia->fetchALL(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/hoja_estilo.css">
    <link rel="icon" href="../Productos/SHOP-Icon.png">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <title><?php echo "★ADMINISTRADOR: " .$_SESSION['user'];?></title>
</head>
<body>
<script src="../js/Productos.js"></script>
<script src="../js/logout.js"></script>
<div class="content">
    <img src="../Productos/x-w.jfif" class="logo">
</div>

<a class="unk">000000</a>
<a class="unk">000000</a>
<a class="unk">000000</a>
<a class="unk">000000</a>

    <img src="../Productos/ADD.png" class="A-C446">

    <div class="menu-bienvenida">
    <a class="A-1">ADMINISTRADOR:</a>
    <a class="A-1">SHOP-ONLINE:</a>
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a> 
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a> 
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a> 
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a> 
    <a class="A-1">★★★</a>
    <a class="A-1">★★★</a>
        <a href="../php/cerrar_sesion.php" class="A-1" onclick="cerrar_sesion()">|CERRAR SESION|</a>
        <a href="../php/admin.php" class="A-1">|ACTUALIZAR|</a>
        <a href="../php/vista_user.php" class="A-1">|USUARIOS|</a>
        <a href="../php/cc_admins.html" class="A-1">|REGISTRAR NUEVO|</a>
        <a href="../extras/op-1-2-3.html" class="A-1">|◄ REGRESAR|</a>
    </div>

    <br><br>

        <table>
            <thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>    
                <tr>
                    <td># IDENTIFICADOR:</td>
                    <td>NOMBRE COMPLETO:</td>
                    <td>FECHA:</td>
                    <td>CORREO:</td>
                    <td>TELEFONO:</td>
                    <td>USUARIO:</td>
                    <td>EDITAR:</td>
                    <td>ELIMINAR:</td>
                </tr>
                <br>
            </thead>
            
            <tbody>
            <?php foreach($solicitudes as $solicitud){ ?>
                <tr>
                    
                    <td><?php echo $solicitud->id ?></td>
                    <td><?php echo $solicitud->nombrec ?></td>
                    <td><?php echo $solicitud->fecha ?></td>
                    <td><?php echo $solicitud->correo ?></td>
                    <td><?php echo $solicitud->tel ?></td>
                    <td><?php echo $solicitud->u ?></td>
                    <td><a href="<?php echo "editar_admin.php?id=" . $solicitud->id?>"><div><img src="../Productos/editar-usuario.png" class="imagen-boton1"></div></a></td>
                    <td><a href="<?php echo "eliminar_admin.php?id=" . $solicitud->id?>"><div><img src="../Productos/eliminar-usuario.png" class="imagen-boton1"></div></a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
</div>
</body>
</html>