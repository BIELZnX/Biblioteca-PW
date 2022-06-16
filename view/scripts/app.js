function mudarTela(url){
    $.ajax({
        url: url,
        success: (e) => {
            $(".container").children().hide();
            $(".container").html(e);
        }
    })
}

$(() => {
    mudarTela("menuInicial.php");
})

$("#consultar-livros").click(() => {
    mudarTela("consultarLivros.php");
})