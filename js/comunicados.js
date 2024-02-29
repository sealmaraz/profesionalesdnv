function iconIO(icon1,icon2,title){
  var x = document.getElementById(icon1);
  var y = document.getElementById(icon2);
  var z = document.getElementById(title);
  console.log(title);
  x.style.display = "none";
  y.style.display= "inline-block";
  if(z.style.display === "none"){
    z.style.display = "block";
  }else{
    z.style.display = "none";
  }
  
}

// function showOculto(varid) {
//   var x = document.getElementById(varid);
//   if (x.style.display === "block") {
//     x.style.display = "none";
//   } else {
//     x.style.display = "block";
//   }
// }
function showOculto_byID(var1, var2) {
  //ocultar_article, cd_oculto
  var x = document.getElementById(var1); //ocultar_article
  var y = document.getElementById(var2); //cd_oculto

  
    if (x.style.display === "block") {
      // x.style.display = "none";
      y.style.display = "none";
    } else {
      x.style.display = "block";
      y.style.display = "none";
    }
}
