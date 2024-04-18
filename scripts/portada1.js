let menu=document.getElementById("imagenMenu");
let cerrarMenu=document.getElementById("cerrar");

function mostrar() {
    document.getElementById("menuDespegable").style.width = "300px";
    document.getElementById("abrir").style.display = "none";
    document.getElementById("cerrar").style.display = "inline";
}
function ocultar() {
    document.getElementById("menuDespegable").style.width = "0";
    document.getElementById("abrir").style.display = "inline";
    document.getElementById("cerrar").style.display = "none";
}



menu.addEventListener("click", mostrar);
cerrarMenu.addEventListener("click", ocultar);


