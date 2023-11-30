
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Alejo</title>
</head>
<body>
    <?php
    require("conexion.php");

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
?>
</body>
</html>