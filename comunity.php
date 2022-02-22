<?php require_once "head.php"; ?>
<link rel="stylesheet" href="css/comunity.css">

<div class="cont-g">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary my-btn" data-bs-toggle="modal" data-bs-target="#registerModal">
        <i class="fas fa-user-plus "></i> Agregar Persona
    </button>

    <div class="filter-box mt-3 mb-3">
        <select id="filtro-tipo" class="form-select">
            <option value="0" selected="true">Selecciona una opcion...</option>
            <option value="a">x</option>
            <option value="c">xx</option>
            <option value="">xxx</option>
            <option value="">xxxx</option>
        </select>
    </div>


    <div class="cont-table">
        <table id="tabla-comunity" class="table table-hover table-bordered table-striped table-responsive">
            <thead class="table-primary text-center">
                <tr>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="table-success" id="tab-body">
                <?php require_once "getComunity.php" ?>
            </tbody>
        </table>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php require_once "foot.php"; ?>
<script src="lib/datatable/js/jquery.dataTables.min.js"></script>
<script src="lib/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="js/comunity.js"></script>