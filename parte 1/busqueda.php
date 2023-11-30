<?php
$mibusqueda = isset($_GET["buscar"]) ? $_GET["buscar"] : null;
$mipagina=$_SERVER["PHP_SELF"]; 
function ejecutar_consulta($laconsulta){
   include("conexion.php");
   $consulta= mysqli_query($conexion,"SELECT * FROM productos WHERE producto LIKE '%$laconsulta%'");
  ?> 
         <!DOCTYPE html>
         <html lang="en">
         <head>
         <section>Datos que encontrados</section>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="estilos.css?ver=1.2">
            <title>Alejo</title>
         </head>
         <body>
         <?php
               echo "<table> ";
               echo "<tr><th>id_producto</th>";
               echo "<th>seccion</th>";
               echo "<th>producto</th>";
               echo "<th>origen</th>";
               echo "<th>importado</th>";
               echo "<th>precio</th></tr>";

            while ($fila = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
               echo "<tr>";
               echo "<td>".$fila['id_producto']."</td>";
               echo "<td>".$fila['seccion']."</td>";
               echo "<td>".$fila['producto']."</td>";
               echo "<td>".$fila['origen']."</td>";
               echo "<td>".$fila['importado']."</td>";
               echo "<td>".$fila['precio']."</td>";
               echo "</tr>";
               ?>
         </body>
         </html>
            <?php
}
}

if($mibusqueda!=NULL){
   ejecutar_consulta($mibusqueda);
}else 
{
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="estilos.css?ver=1.1">
   <title>Diiego</title>
</head>
<body>
   <section>Busqueda por nombre producto</section>

<form class="form-search" method='get' action="<?php echo $mipagina; ?>">
   <label>Buscar:<input type='text' name= 'buscar'></label>
   <input type='submit' name='search' value='Enviar'>
   </form>
</body>
</html>

<?php 
}
?>
