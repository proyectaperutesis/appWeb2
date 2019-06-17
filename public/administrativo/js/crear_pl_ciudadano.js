var fundamentos = [];
var articulos = [];

//Articulos

function addArticulos() {
    var articulo = $('#txtArticulo').val();

    articulos.push(articulo);
    cargarArticulos();
    $('#txtArticulo').val('');
}

function cargarArticulos() {
    var html = "";
    var toBD = "";

    if(articulos.length >= 5) { $("#scrolling-wrapper2").css({"overflow-y":"scroll","height":"200px"}); }
    else {$("#scrolling-wrapper2").css({"overflow-y":"","height":""});}

    for(i = 0; i < articulos.length; i++) {
        html += 
        `<div class='card' style='padding: 10px'>
            <div class='row'>
                <div class='col-md-9'>
                <b>Articulo `+(i+1)+`</b>: `+articulos[i]+`
                </div>    
                <div class='col-md-3' style='text-align: end;'>
                
                <span onclick='removerArticulo(`+i+`)' data-feather="x-circle" style='color: red'></span>
                <select style='padding: 0 5px;text-align: center; margin-left: 10px'>
                    <option selected>Cambiar lugar</option>
                    <option>1</option>
                    <option>2</option>
                </select>
                </div> 
            </div>    
        </div>`;
        html += "<br>";
        toBD += articulos[i] + ";";
    }
    $("#scrolling-wrapper2").html(html);
    $("#inputOcultoArticulos").val(toBD);
    feather.replace();
}

function removerArticulo(i){
    articulos.splice(i, 1);
    cargarArticulos();
}


//Fundamentos

function addFundamentoLey() {

    var fundamento = $('#txtFundamento').val();

    fundamentos.push(fundamento);
    cargarFundamentos();
    $('#txtFundamento').val('');
}

function cargarFundamentos() {
    var html = "";
    var toBD = "";

    if(fundamentos.length >= 5) { $("#scrolling-wrapper").css({"overflow-y":"scroll","height":"200px"}); }
    else {$("#scrolling-wrapper").css({"overflow-y":"","height":""});}

    for(i = 0; i < fundamentos.length; i++) {
        html += 
        `<div class='card' style='padding: 10px'>
            <div class='row'>
                <div class='col-md-11'>
                Que, `+fundamentos[i]+`
                </div>    
                <div class='col-md-1' style='text-align: center' onclick='removerFundamento(`+i+`)'>
                <span data-feather="x-circle" style='color: red'></span>
                </div> 
            </div>    
        </div>`;
        html += "<br>";
        toBD += fundamentos[i] + ";";
    }
    $("#scrolling-wrapper").html(html);
    $("#inputOculto").val(toBD);
    feather.replace();
}

function removerFundamento(i){
    fundamentos.splice(i, 1);
    cargarFundamentos();
}