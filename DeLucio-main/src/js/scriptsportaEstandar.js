function actualizarOpcionesCabezalYMensulas(configSeleccionada) {
    var cabezalFrontalSelect = document.getElementById("cabezal_frontal");
    var mensulasSelect = document.getElementById("mensulas");
    
    // Limpiar las opciones anteriores
    cabezalFrontalSelect.innerHTML = "";
    mensulasSelect.innerHTML = "";
  
    // Definir las opciones para cada valor de "config"
    if (configSeleccionada === "40") {
      agregarOpcion(cabezalFrontalSelect, "Con 1 par de seguros tipo pin-lock de 1 pulgada de diámetro");
      agregarOpcion(mensulasSelect, "N/A");
      agregarOpcion(mensulasSelect, "1 par de mensulas centrales fijas, con un twist lock cada una");
    } else if (configSeleccionada === "40-20") {
      agregarOpcion(cabezalFrontalSelect, "Con 1 par de seguros tipo pin-lock de 1 pulgada de diámetro");
      agregarOpcion(cabezalFrontalSelect, "Con 1 par de seguros tipo pin-lock de 1 pulgada de diámetro");
      agregarOpcion(mensulasSelect, "1 par de mensulas centrales fijas, con un twist lock cada una");
      agregarOpcion(mensulasSelect, "1 par de mensulas centrales fijas, 1 par de mensulas centrales retractiles, con un twist lock cada una");
    } else if (configSeleccionada === "40-20-20") {
      agregarOpcion(cabezalFrontalSelect, "Con 2 pares de seguros tipo pin-lock de 1 pulgada de diámetro");
      agregarOpcion(mensulasSelect, "1 par de mensulas centrales fijas y 1 par de mensulas centrales fijas, con un twist lock retractil cada una");
    } else {
      // Si no hay opción seleccionada o es diferente de las definidas, mostrar opción por defecto
      agregarOpcion(cabezalFrontalSelect, "Seleccione una configuración primero");
      agregarOpcion(mensulasSelect, "Seleccione una configuración primero");
    }
  }
  
  function agregarOpcion(selectElement, opcionTexto) {
    var option = document.createElement("option");
    option.text = opcionTexto;
    selectElement.add(option);
  }
  

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