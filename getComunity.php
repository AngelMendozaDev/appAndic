<?php
require_once "classes/funciones.php";
$model = new funciones();

$data = $_GET['data'];

switch ($data) {
    case 0:
        $result = $model->getAllPerson();
        break;
}

if ($result->num_rows > 0) {

    while ($data = $result->fetch_assoc()) { ?>
        <tr>
            <td><?php echo $data['nombre'] ?></td>
            <td><?php echo $data['app'] ?></td>
            <td><?php echo $data['apm'] ?></td>
            <td>
                <button class="btn btn-small btn-primary infoButton" onclick="getContact('<?php echo $data['id_p'] ?>')">
                    <i class="fa fa-info-circle" aria-hidden="true"></i>
                    <span class="msg-pop">
                        Obtiene la informacion general de la persona
                    </span>
                </button>
            </td>
        </tr>

    <?php }
} else {
    ?>
    <div class="alert alert-danger" role="alert">
        <center>SIN DATOS PARA MOSTRAR</center>
    </div>
<?php
}
?>