// Cambio de Llantas con rines

function actualizarRin() {
    var selectLlanta = document.getElementById("llantas");
    var selectRin = document.getElementById("rin");
  
    var llantaseleccionada = selectLlanta.value;
  
    selectRin.innerHTML = "";
  
    if (llantaseleccionada === "8") {
      var option = document.createElement("option");
      option.value = "8";
      option.textContent = "8";
      selectRin.appendChild(option);
    } else if(llantaseleccionada === "12"){
        var option = document.createElement("option");
        option.value = "12";
        option.textContent = "12";
        selectRin.appendChild(option);
    }

  }

  // Cambio de Medida
function actualizarMedida() {
  var selectllantaMedida = document.getElementById("medida_llanta");
  var selectRinMedida = document.getElementById("rin_medida");

  var medida_seleccionada = selectllantaMedida.value;

  selectRinMedida.innerHTML = "";

  var option = document.createElement("option");
  option.value = medida_seleccionada;
  option.textContent = medida_seleccionada;
  selectRinMedida.appendChild(option);
}
