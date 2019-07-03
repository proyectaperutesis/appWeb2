var myVar;

window.onload = function () {
    getAllDataProyecto();
    mostrarTodo();
}

function mostrarTodo() {
    myVar = setTimeout(showPage, 3000);
    console.log('entre');
}

function escapeHtml(text) {
    return text
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}


function votar(like) {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var id_proyecto = url
        .searchParams
        .get("pl");
    $.ajax({
        url: 'C_perfil_pl/votacion',
        data: {
            id_proyecto,
            like
        },
        type: 'POST'
    })
        .done(function (response) {
            let data = JSON.parse(response);
            if (data.error == 5) {
                alert('¡Debe estar logueado para poder votar!');
            } else {
                alert('¡Voto asignado!');
                location.reload();
            }
        })
        .fail(function () {
            alert("error");
        });
}

function openModalDescripcion() {
    $("#modalInformacion").modal()
}

function openModalComentario() {
    $("#modalComentario").modal()
}

function getAllDataProyecto() {
    var url_string = window.location.href;
    var url = new URL(url_string);
    var c = url
        .searchParams
        .get("pl");
    var json_fundamento = "";
    var json_forma = "";

    var card = "";
    var _card = "";

    $
        .ajax({
            url: 'C_perfil_pl/getAllDataProfile', type: 'POST', data: {
                c
            }
        })
        .done(function (response) {
            let data = JSON.parse(response);
            //console.log(data.result);
            if (data.error == 0) {
                json_fundamento = data.result[0].json_fundamento_ley;
                json_forma = data.result[0].json_forma_legal;

                $("#title_pj").text(data.result[0].titulo);
                $("#imagen").attr("src", base_url + 'public/utils/img/categorias/' + data.result[0].imagen_categoria);
                $("#user").text(data.result[0].usuario_ins);
                $("#descripcion").text(data.result[0].descripcion);
                $("#like").text(data.result[0].me_gusta);
                $("#nolike").text(data.result[0].no_me_gusta);
                $("#vigencia").text(data.result[0].efecto_vigencia_norma);
                $("#costo").text(data.result[0].costo_beneficio);
                $("#cierre").text('Cierre de participaciones: ' + data.result[0].fh_cierre_participacion);

                // CREACION DINAMICA DE FUNDAMENTO
                json_fundamento = JSON.parse(json_fundamento);
                const container = document.getElementById('cards-fundaments');
                var _fundamento = "";
                for (i in json_fundamento) {
                    _fundamento = escapeHtml(json_fundamento[i].fundament.trim());
                    card = `
                            <div class="card" style='margin: 10px 0'>
                                <div class="card-body">
                                    <p class="card-text">Que, ` + json_fundamento[i].fundament + `</p>
                                    <button type="button" class="btn btn-primary" onClick="openPropuesta(1,` + json_fundamento[i].idFundament + `,null,'` + _fundamento
                        + `')">Editar</button>
                                    <button type="button" class="btn btn-info" onClick="openPropuesta(2,` + json_fundamento[i].idFundament + `)">Comentar</button>
                                    <button type="button" class="btn btn-warning" onClick="openPropuesta(3,` + json_fundamento[i].idFundament + `,null,'` + _fundamento
                        + `')">Excluir</button>
                                </div>
                            </div>
                            `;
                    container.innerHTML += card;
                }

                // CREACION DINAMICA DE ARTICULOS
                json_forma = JSON.parse(json_forma);
                const _container = document.getElementById('cards-articles');
                var _articulo = "";
                for (i in json_forma) {
                    _articulo = escapeHtml(json_forma[i].article.trim());
                    _card = `
                            <div class="card" style='margin: 10px 0'>
                                <div class="card-body">
                                    <p class="card-text">` + json_forma[i].articleNumber + `: ` + json_forma[i].article + `</p>
                                    <button type="button" class="btn btn-primary" onClick="openPropuesta(1,` + json_forma[i].idArticle + `,'` + json_forma[i].articleNumber + `','` + _articulo
                        + `')">Editar</button>
                                    <button type="button" class="btn btn-info" onClick="openPropuesta(2,` + json_forma[i].idArticle + `,'` + json_forma[i].articleNumber + `')">Comentar</button>
                                    <button type="button" class="btn btn-warning" onClick="openPropuesta(3,` + json_forma[i].idArticle + `,'` + json_forma[i].articleNumber + `','` + _articulo
                        + `')">Excluir</button>
                                </div>
                            </div>
                            `;
                    _container.innerHTML += _card;
                }
            }
        })
        .fail(function () {
            alert("error");
        });
}
var seleccion = [];

function openPropuesta(tipo, id, value = null, _value = null) {
    var propuesta = "";

    $.ajax({
        url: 'C_perfil_pl/checkIfUserIsLogged'
    })
        .done(function (response) {
            let data = JSON.parse(response);
            if (data.error == 5) {
                alert('¡Debe estar logueado para poder realizar esta acción!');
            } else {
                if (tipo == 1) {
                    propuesta = "editar";
                    $("#txtPropuesta").off("mouseup");
                }
                else if (tipo == 2) {
                    propuesta = "comentar";
                    $("#txtPropuesta").off("mouseup");
                }
                else {
                    propuesta = "excluir";
                    seleccion = [];
                    $("#txtPropuesta").off("mouseup");
                    thisRespondHightlightText("#txtPropuesta");
                }

                $("#txtPropuesta").html(_value);

                if (value != null)
                    $("#title_propuesta").text('Propuesta de ' + propuesta + ' para ' + value);
                else
                    $("#title_propuesta").text('Propuesta de ' + propuesta);

                $("#modalPropuesta").modal();
                //getSelectionText();
            }
        })
        .fail(function () {
            alert("error");
        });
}


function thisRespondHightlightText(thisPropuesta) {
    $(thisPropuesta)
        .on("mouseup", function () {
            var selectedText = getSelectionText();
            //Guardar lo que se selecciona
            seleccion.push(selectedText);
            console.table(seleccion);
            for (var i = 0; i < seleccion.length; i++) {
                var selectedTextRegExp = new RegExp(seleccion[i], "g");
                var text = $(this)
                    .html()
                    .replace(selectedTextRegExp, "<b style='text-decoration: line-through; color: red'>" + seleccion[i] + "</b>");
                console.log('TEXT: ' + text);
                $(this).html(text);
            }
            //----

        });
}

function getSelectionText() {
    var text = "";
    if (window.getSelection) {
        text = window
            .getSelection()
            .toString();
        console.log(text);
    } else if (document.selection && document.selection.type != "Control") {
        text = document
            .selection
            .createRange()
            .text;
        console.log('nose: ' + text);

    }
    return text;
}

function proponer() {
    var proposicion = $("#txtPropuesta").html();
    console.log(proposicion);
}

function showPage() {
    //document.getElementById("loader").style.display = "none";
    $("#containerGeneral").css("display", "block");
    $("#loader").css("display", "none");
}

