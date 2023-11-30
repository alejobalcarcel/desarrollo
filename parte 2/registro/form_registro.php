<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form_registro.css">
    <title>Alejo</title>
</head>
<body>
    <h1 class="titulo">Gestion Productos</h1>
    <div class="main-content">
        <form class="form-reg" method="get" action="insertar_productos.php">
            <div class="form-tittle-row">
                <h1>Agregar productos</h1>
            </div>

            <div class="form-row">
                <label>Codigo Producto</label>
                <input type="text" name="id_producto" id="id_producto">
            </div>

            <div class="form-row">
                <label>Seccion</label>
                <input type="text" name="seccion" id="seccion">
            </div>

            <div class="form-row">
                <label>Nombre Producto</label>
                <input type="text" name="producto" id="producto">
            </div>

            <div class="form-row">
                <label>Origen</label>
                <input type="text" name="origen" id="origen">
            </div>

            <div class="form-row">
                <label>Importado</label>
                <select name="importado" id="importado">
                    <option>VERDADERO</option>
                    <option>FALSO</option>
                </select>
            </div>

            <div class="form-row">
                <label>Precio</label>
                <input type="text" name="precio" id="precio">
            </div>
            <div class="form-row">
                <input type="submit" name="enviar" id="enviar" value="Enviar">
                <input type="reset" name="borrar" id="borrar" value="Limpiar Formulario">
            </div>
        </form>
    </div>
</body>
</html>