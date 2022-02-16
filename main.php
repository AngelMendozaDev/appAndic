<?php require_once "head.php" ?>
<link rel="stylesheet" href="css/main.css">

<!-- Menu Superior -->
<div class="nav-cont">
    <div class="name-cont">
        <input type="checkbox" id="menu-status" hidden>
        <label for="menu-status"></label>
        <label class="name-us">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <?php echo $_SESSION['NameUs']  ?>
        </label>
    </div>
    <div class="option-cont">
        <ul class="opciones">
            <li class="nav-option active">
                <a href="#">Home</a>
            </li>
            <li class="nav-option">
                <a href="#">Perfil</a>
            </li>
            <li class="nav-option">
                <a href="#">Cerrar Sesión</a>
            </li>
        </ul>
    </div>
</div>


<!--Menú principal -->
<div class="menu-box" id="my-menu">
    <label class="exit-btn" for="menu-status">
        <i class="fa fa-times-circle" aria-hidden="true"></i>
    </label>
    <div class="menu-head">
        <div class="menu-img">
            <img src="media/pictures/<?php echo $_SESSION['ID'] ?>.png" alt="">
        </div>
        <br>
        <h6 class="name-menu"><?php echo $_SESSION['NameUs']  ?></h6>
    </div>
    <hr>
    <div class="menu-body">
        <div class="accordion" id="accordeon">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        &nbsp;
                        Personal y comunidad
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                    data-bs-parent="#accordeon">
                    <div class="accordion-body">
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="">
                                    <i class="fas fa-user-tie item-icon"></i>
                                    &nbsp; Agregar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#accordeon">
                    <div class="accordion-body">
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="">
                                    <i class="fa fa-optin-monster" aria-hidden="true"></i>
                                    optionX
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#accordeon">
                    <div class="accordion-body">
                        <ul class="sub-menu">
                            <li class="sub-menu-item">
                                <a href="">
                                    <i class="fa fa-optin-monster" aria-hidden="true"></i>
                                    optionX
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin accordeon -->


    </div>
    <hr style="margin: auto; width: 50%;">
    <div class="menu-foot">
        <h3 class="author-g">
            Copyright TecNM Campus Tláhuac
            <i class="fa fa-copyright" aria-hidden="true"></i>
            <span class="author">/ Diseño Mendoza G. Luis A.</span>
        </h3>
    </div>
</div>

<?php require_once "foot.php" ?>