<a href="../coches">Volver al listado de coches</a>

<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="./crear" method="post">

    <?= csrf_field() ?>

    <label for="modelo">Modelo</label>
    <input type="input" name="modelo" value="<?= set_value('modelo') ?>">
    <br />

    <label for="precio">Precio</label>
    <input type="number" name="precio" value="<?= set_value('precio') ?>">
    <br />

    <label for="id_marca">Marca</label>
    
    <select name="id_marca">

        <?php if (! empty($marca) && is_array($marca)): ?>

            <?php foreach ($marca as $marca_item): ?>

                <option value="<?= $marca_item['id'] ?>">
                    <?= $marca_item['marca']  ?>
                </option>

            <?php endforeach ?>

        <?php endif ?>

    </select>

    <br />

    <input type="submit" name="submit" value="Crear Coche">

</form>