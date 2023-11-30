<?php
$id=$_GET["id_producto"];
$sec=$_GET["seccion"];
$prod=$_GET["producto"];
$org=$_GET["origen"];
$imp=$_GET["importado"];
$prec=$_GET["precio"];

require ("conexion.php");

$conexion= mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

if (mysqli_connect_errno()){
    echo "LA CONEXION FALLO"; 
    exit (); 
}

mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos");

$consulta= "INSERT INTO productos (id_producto, seccion, producto, origen, importado, precio) 
VALUES ('$id', '$sec', '$prod', '$org', '$imp', '$prec')"; 

$resultado = mysqli_query($conexion, $consulta);

if ($resultado==false) {
    echo "Error de ejecucion";
}else{
    echo "El producto fue almacenado con los siguientes Datos: <br><br>";
    echo "Codigo: "."$id"."<br>";
    echo "Seccion: "."$sec"."<br>";
    echo "Producto: "."$prod"."<br>";
    echo "Pais de Origen: "."$org"."<br>";
    echo "Importado: "."$imp"."<br>";
    echo "Precio: "."$prec"."<br>";
}

    mysqli_close($conexion);

?>
