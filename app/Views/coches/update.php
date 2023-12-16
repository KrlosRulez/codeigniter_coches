<h2><?= esc($title) ?></h2>

<a href="../../coches">Volver al listado de coches</a>
<br /><br /><br />

<?php if (! empty($coches) && is_array($coches)): ?>

    <form action="../modificado/<?= esc($coches['id']) ?>" method="post">

        <?= csrf_field() ?>

        <label for="modelo">Modelo</label>
        <input type="input" name="modelo" value="<?= esc($coches['modelo']) ?>">
        <br />

        <label for="precio">Precio</label>
        <input type="number" name="precio" value="<?= esc($coches['precio']) ?>">
        <br />

        <label for="id_marca">Marca</label>
        <input type="number" name="id_marca" value="<?= esc($coches['id_marca']) ?>">
        <br />

        <input type="submit" name="submit" value="Modificar Coche">

    </form>

<?php endif ?>