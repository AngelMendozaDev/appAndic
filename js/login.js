function logIn() {
    $.ajax({
        url: 'controller/logIn.php',
        type: 'POST',
        data: $('#form-log').serialize(),
        success: function(response) {
            //console.log(response);
            response = response.trim();
            if (response == 1)
                location.href = "menu.php";
            else if (response == 2)
                swal("Usuario/Contraseña Incorrectos", "ANDIC A.C. 2022", "error");
            else if (response == 3)
                swal("Server sin Conexión", "Contacte a soporte técnico", "info");
        }
    });

    return false;
}