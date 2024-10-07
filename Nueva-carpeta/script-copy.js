
$("#btn-confirmar").click(function(){
    console.log("sz");
    $("#Compartir").removeAttr("hidden");
})

$("#btn-consultar").click(function(){
    console.log("sz");
    $("#contenido-oculto").toggleClass("div-oculto"); // Alternar la clase
})