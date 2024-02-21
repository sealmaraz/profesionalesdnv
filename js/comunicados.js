function showOculto(varid) {
    var x = document.getElementById(varid);
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}
function showOculto_byID(var1,var2) {
    var x = document.getElementById(var1);
    var y = document.getElementById(var2);
    if (x.style.display === "block") {
        // x.style.display = "none";
        y.style.display = "none"
    } else {
        x.style.display = "block";
        y.style.display = "none";
    }
}