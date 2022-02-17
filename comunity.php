<?php require_once "head.php"; ?>

<div class="cont-g">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal">
        <i class="fas fa-user-plus "></i> Agregar Persona
    </button>

    <div class="filter-box">
        <select id="filtro-tipo" class="form-select">
            <option value="0" selected="true">Selecciona una opcion...</option>
            <option value="a">x</option>
            <option value="c">xx</option>
            <option value="">xxx</option>
            <option value="">xxxx</option>
        </select>
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