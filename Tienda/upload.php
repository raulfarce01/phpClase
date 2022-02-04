<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
</head>
<body>
    <form action="./app/subida.php" method="post" enctype="multipart/form-data">
        
    <p>
        <label for="image">Imagen: </label>
        <input type="file" name="image" required>
    </p>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required>

    <p>
        <p>
            <label for="desc">Descripción: </label>
        </p>
        <textarea name="desc" rows="5" columns="10" required></textarea>
    </p>
        <label for="precio">Precio: </label>
        <input type="number" step="0.01" name="precio" required>

    <p>
        <input type="submit" name="submit" value="sube"/>
    </p>
    </form>
</body>
</html>