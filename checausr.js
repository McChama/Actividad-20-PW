function Cerrar_Modal(Objeto){
    $(Objeto).click(function(){
        $("#Form_Agregar").toggleClass("is-active");
        $("body").toggleClass("is-clipped");
    })
}

$(document).ready(function(){
    /*
    $("#Agregar").click(function(){
        $("#Form_Agregar").toggleClass("is-active");
        $("body").toggleClass("is-clipped");  
    })*/
    Cerrar_Modal("#Cancelar_Nuevo_Usuario");
    Cerrar_Modal(".modal-background");
    Cerrar_Modal(".delete");


    $("#Regresar").click(function(){
        window.location="index.php";
    })
    $("#Agregar").click(function(){
        window.location="vistas/agregar_usuario.php";
    })
})