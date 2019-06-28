var fundamentos = [];
var articulos = [];
var cont = 0;

function escapeHtml(text) {
    return text
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}

//Articulos

function addArticulos() {
    var articulo = $('#txtArticulo').val();
    articulo = escapeHtml(articulo);

    //Creando objeto JSON
    var element = {};
    element.article = articulo;
    articulos.push(element);

    cargarArticulos();
    $('#txtArticulo').val('');
}

function cargarArticulos() {
    var html = "";

    if (articulos.length >= 5) {
        $("#scrolling-wrapper2").css({"overflow-y": "scroll", "height": "200px"});
    } else {
        $("#scrolling-wrapper2").css({"overflow-y": "", "height": ""});
    }

    for (i = 0; i < articulos.length; i++) {
        html += `<div class='card' style='padding: 10px'>
            <div class='row'>
                <div class='col-md-9'>
                <b>Articulo ` + (i + 1) + `</b>: ` + articulos[i].article + `
                </div>    
                <div class='col-md-3' style='text-align: end;'>
                
                <span onclick='removerArticulo(` + i + `)' data-feather="x-circle" style='color: red'></span>
                <select style='padding: 0 5px;text-align: center; margin-left: 10px'>
                    <option selected>Cambiar lugar</option>
                    <option>1</option>
                    <option>2</option>
                </select>
                </div> 
            </div>    
        </div>`;
        html += "<br>";
        //toBD += articulos[i].article;
    }
    $("#scrolling-wrapper2").html(html);
    var salida = JSON.stringify(articulos);
    $("#inputOcultoArticulos").val(salida);
    feather.replace();
}

function removerArticulo(i) {
    articulos.splice(i, 1);
    cargarArticulos();
}

//Fundamentos

function addFundamentoLey() {

    var fundamento = $('#txtFundamento').val();
    fundamento = escapeHtml(fundamento);    
    //Creando objeto JSON
    var element = {};
    element.fundament = fundamento;
    fundamentos.push(element);

    cargarFundamentos();
    $('#txtFundamento').val('');
}

function cargarFundamentos() {
    var html = "";

    if (fundamentos.length >= 5) {
        $("#scrolling-wrapper").css({"overflow-y": "scroll", "height": "200px"});
    } else {
        $("#scrolling-wrapper").css({"overflow-y": "", "height": ""});
    }

    for (i = 0; i < fundamentos.length; i++) {
        html += `<div class='card' style='padding: 10px'>
            <div class='row'>
                <div class='col-md-11'>
                Que, ` + fundamentos[i].fundament + `
                </div>    
                <div class='col-md-1' style='text-align: center' onclick='removerFundamento(` + i + `)'>
                <span data-feather="x-circle" style='color: red'></span>
                </div> 
            </div>    
        </div>`;
        html += "<br>";
    }
    var salida = JSON.stringify(fundamentos);
    $("#scrolling-wrapper").html(html);
    $("#inputOculto").val(salida);
    feather.replace();
}

function removerFundamento(i) {
    fundamentos.splice(i, 1);
    cargarFundamentos();
}

//Registro
function registrarPL() {
    var titulo = $('#txtTitulo').val();
    titulo = escapeHtml(titulo);
    var fundamento = JSON.stringify(fundamentos);
    var vigencia = $('#txtVigencia').val();
    vigencia = escapeHtml(vigencia);
    var costo = $('#txtCosto').val();
    costo = escapeHtml(costo);
    var formulalegal = JSON.stringify(articulos);
    var categoria = $('#selectCategoria').val();

    if (!validate_pl(titulo, fundamento, vigencia, costo, formulalegal, categoria)) {
        return;
    }

    $.ajax({
        url: 'administrativo/C_crear_pl/registrarPL',
        data: {
            titulo,
            fundamento,
            vigencia,
            costo,
            formulalegal,
            categoria
        },
            type: 'POST'
        })
        .done(function (response) {
            let data = JSON.parse(response);
            if (data.error == 0) {
                alert('¡Registro exitoso!');
                location.reload();
            }
            //console.log(data.html);
        })
        .fail(function () {
            alert("error");
        });
}

function validate_pl(titulo, fundamento, vigencia, costo, formulalegal, categoria) {
    if (titulo == '') {
        alert('Debe ingresar un título');
        return;
    }
    if (fundamento == '') {
        alert('Debe ingresar al menos un fundamento');
        return;
    }
    if (vigencia == '') {
        alert('Debe ingresar vigencia');
        return;
    }
    if (costo == '') {
        alert('Debe ingresar el costo - beneficio');
        return;
    }
    if (formulalegal == '') {
        alert('Debe ingresar la fórmula legal');
        return;
    }
    if (categoria == '') {
        alert('Debe seleccionar una categoría');
        return;
    }

    return true;
}