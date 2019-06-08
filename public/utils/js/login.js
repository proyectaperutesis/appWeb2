function inicioSesion() {
    var usuario = 'abel.tarazona';
    var password = '123';
    $.ajax({
        url: "C_login/login",
        method: "POST",
        data: { usuario, password }
    }).done(function (response) {
        let data = JSON.parse(response);
        if (data.error == 0) {
            window.open(base_url + "dashboard", "_self");
        } else {
            alert('Usuario incorrecto o inactivo');
        }
    }).fail(function (err) {

    }).always(function () {
        //do  something whether request is ok or fail
    });

}