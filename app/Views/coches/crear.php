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
    <input type="number" name="id_marca" value="<?= set_value('id_marca') ?>">
    <br />

    <input type="submit" name="submit" value="Crear Coche">

</form>