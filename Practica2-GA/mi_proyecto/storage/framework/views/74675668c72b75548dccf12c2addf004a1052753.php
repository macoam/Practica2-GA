<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Noticia</title>
</head>
<body>
    <h1>Nueva noticia</h1>
    <a href="<?php echo e(route('noticias.index')); ?>">Volver a la lista de noticias</a>
    <form method="post" action="<?php echo e(route('noticias.store')); ?>">
        <?php echo csrf_field(); ?>
        <label>Titulo</label>
        <input name="titulo" type="text">
        <label>Autor</label>
        <input name="autor" type="text">
        <label>Fecha</label>
        <input name="fecha" type="date">
        <label>Noticia</label>
        <textarea name="noticia" rows="5"></textarea>
        <button type="submit">Guardar</button>
    </form>
</body>
</html><?php /**PATH /Users/ulsa/Desktop/Paula/mi_proyecto/resources/views/noticias/create.blade.php ENDPATH**/ ?>