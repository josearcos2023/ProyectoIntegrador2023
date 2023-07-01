function redirect() {
    var select = document.getElementById("moduleSelect");
    var option = select.options[select.selectedIndex].value;
    if (option === "1") {
        window.location.href = "configuracion.html";
    } else if (option === "2") {
        window.location.href = "menuprofesores.html";
    }
}