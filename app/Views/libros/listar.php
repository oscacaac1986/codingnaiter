<?= $header; ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 text-center">
            <h1>Listar Libros</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-light table-responsive ">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($libros as $libro) : ?>
                        <tr>
                            <td scope="row"><?= $libro['id'] ?></td>
                            <td><?= $libro['nombre'] ?></td>
                            <td><?= $libro['imagen'] ?></td>
                            <td>Editar/Eliminar</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>
</div>
<?= $footer; ?>