function buscarProyectosLey(){
    console.log('aslkdj');
    var titulo = $('#txtTitulo').val();
    var categoria = $('#selectCategoria').val();
    var fecha = $('#txtFecha').val();
    var tipo = $('#selectTipo').val();

    $.ajax({
        url: 'C_principal/buscarPL',
        data: {
            titulo, categoria, fecha, tipo
        },
        type: 'POST'
    }).done(function (response) {
        let data = JSON.parse(response);
        //console.log(data.html);
        $("#divContainerPLs").html(data.html);
    }).fail(function () {
        alert("error");
    });

}


function openFullProyecto(id){
    window.location.replace("proyectoley?pl="+id);
}


 $(document).ready(function() {
    $('.datepicker').datetimepicker({
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