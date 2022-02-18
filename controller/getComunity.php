<?php
require_once "../classes/funciones.php";
$model = new funciones();

$data = $_POST['data'];

switch ($data) {
    case 0:
        print_r($model->getAllPerson());
        break;
    default:
        echo "err";
        break;
}
