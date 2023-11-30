<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Alejo</title>
</head>
<body>
    <?php
    require("conexion.php");
    $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

    if(mysqli_connect_errno()){
    echo "La conexion ta mala";
    exit();
    }

    mysqli_select_db($conexion,$db_nombre) or die ("No se encontro la base de datos");
    
    echo "<table> ";
    echo "<tr><th>id_producto</th>";
    echo "<th>seccion</th>";
    echo "<th>producto</th>";
    echo "<th>origen</th>";
    echo "<th>importado</th>";
    echo "<th>precio</th></tr>";
    
    $resultado = mysqli_query($conexion, "SELECT * FROM productos");
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>".$fila['id_producto']."</td>";
        echo "<td>".$fila['seccion']."</td>";
        echo "<td>".$fila['producto']."</td>";
        echo "<td>".$fila['origen']."</td>";
        echo "<td>".$fila['importado']."</td>";
        echo "<td>".$fila['precio']."</td>";
        echo "</tr>";;
    }
    echo "</table>";
    mysqli_close($conexion);
        ?>
</body>
</html>