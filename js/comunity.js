let filter = $('#filtro-tipo');
$(function() {
    const tab = $('#tabla-comunity').DataTable();
    $('#filtro-tipo').change(function() {
        $.ajax({
            url: 'controller/getComunity.php',
            type: 'POST',
            data: { data: filter.val() },
            success: function(response) {
                console.log(response)
                if (response == "err") {
                    tab
                        .clear()
                        .draw();

                } else {
                    paintTable(response);
                }
            }
        });
    });


    function paintTable(json) {
        let obj = JSON.parse(json);
        //console.log(obj);
        $.each(obj, function(key, data) {
            $('#tab-body').append("<tr>" +
                "<td>" + data.nombre + "</td>" +
                "<td>" + data.app + "</td>" +
                "<td>" + data.apm + "</td>" +
                "<td>"++"</td>" +
                "</tr>");
        });
    }
});

// $("#tab-body").empty()
// $('#tab-body').append("<tr>" +
//     "<td>hola</td>" +
//     "<td>Amor</td>" +
//     "<td>Te 3</td>" +
//     "<td>Amos mi cielo</td>" +
//     "</tr>");