const divInfo = document.querySelector(".icon_infoHotel");
const divTarifas = document.querySelector(".tarifas");

divInfo.addEventListener("click",() => {
    divTarifas.classList.toggle("tarifas_visible");
})