<a href="../">Volver al listado de coches</a>

<h2><?= esc($title) ?></h2>

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

        <select name="id_marca">

            <?php if (! empty($marca) && is_array($marca)): ?>

                <?php foreach ($marca as $marca_item): ?>

                    <option value="<?= $marca_item['id'] ?>"
                    <?php if ($marca_item['id'] == esc($coches['id_marca'])): ?> selected <?php endif ?>>
                        <?= $marca_item['marca'] ?>
                    </option>

                <?php endforeach ?>

            <?php endif ?>

        </select>

        <br />

        <input type="submit" name="submit" value="Modificar Coche">

    </form>

<?php endif ?>