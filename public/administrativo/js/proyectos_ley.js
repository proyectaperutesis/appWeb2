$(document).ready(function() {
    $('.datepicker').datetimepicker({
        minDate: Date.now(),
        locale: 'es',
        format: 'DD/MM/YYYY',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
        
        
     });
});
//Ciudadano
var id_proyecto = "";

function buscarProyectosLey()
{
    var estado = $('#selectEstado').val();

    $.ajax({
        url: 'administrativo/C_proyectos_ley/getProyectosLey',
        data: {
            estado
        },
        type: 'POST'
    }).done(function (response) {
        let data = JSON.parse(response);
        $("#row_proyectos").css('display', 'block');
        $("#body_proyectos").css('display', 'block');

        $("#body_proyectos").html(data.html);
            feather.replace();
        /*if(data.error == 0) {
            $("#body_proyectos").html(data.html);
            feather.replace();
        }*/
        //console.log(data.html);
    }).fail(function () {
        alert("error");
    });
}

function openPublish(id_pl, title)
{
    //console.log(title);
    id_proyecto = id_pl;
    $("#title_pl").html(title);
    $('#modalToPublish').modal('show');
}

function publicarPL() 
{
    var descripcion = $('#txtDescripcion').val();
    var fecha = $('#txtFecha').val();
    var id = id_proyecto;

    $.ajax({
        url: 'administrativo/C_proyectos_ley/publicarProyectoLey',
        data: {
            descripcion, fecha, id
        },
        type: 'POST'
    }).done(function (response) {
        let data = JSON.parse(response);
        if(data.error == 0) {
            alert('Publicacion exitosa!');
            location.reload();
        }
    }).fail(function () {
        alert("error");
    });
}