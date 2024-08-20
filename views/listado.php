<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Usuario</title>
</head>
<body>
    <h1>Bienvenido: <?php echo $usuario?></h1>
    <h3>Listado de Usuarios</h3>
    <ul>
        <?php foreach($listado as $usuario) : ?>
            <li><?php echo $usuario ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>