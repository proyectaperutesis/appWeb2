var fundamentos = [];

function addFundamentoLey() {

    var fundamento = $('#txtFundamento').val();

    fundamentos.push(fundamento);
    cargarFundamentos();
}

function cargarFundamentos() {
    var html = "";
    for(i = 0; i < fundamentos.length; i++) {
        html += "<div class='card' style='padding: 10px'>Que, " + fundamentos[i] + "</div>";
        html += "<br>";
    }
    $("#scrolling-wrapper").html(html);
}