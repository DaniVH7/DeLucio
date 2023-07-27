  // Cambio de Llantas y rines

function actualizarRin() {
    var selectLlanta = document.getElementById("llantas");
    var selectRin = document.getElementById("rin");
  
    var llantaseleccionada = selectLlanta.value;
  
    selectRin.innerHTML = "";

    var option = document.createElement("option");
    option.value = llantaseleccionada;
    option.textContent = llantaseleccionada;
    selectRin.appendChild(option); // Changed from selectRinMedida to selectRin
}


  // Cambio de Medida rin y llanta
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

// Cambio entre Material y Birlo
function actualizarBirlo() {
    var materialSelect = document.getElementById("material");
    var birloSelect = document.getElementById("birlo");
  
    var materialSeleccionado = materialSelect.value;
  
    birloSelect.innerHTML = "";
  
    var option = document.createElement("option");
  
    if (materialSeleccionado === "Acero") {
      option.value = "Corto (AC)";
      option.textContent = "Birlo Corto";
    } else if (materialSeleccionado === "Aluminio") {
      option.value = "Largo (AL)";
      option.textContent = "Birlo Largo";
    }
    birloSelect.appendChild(option);
  }