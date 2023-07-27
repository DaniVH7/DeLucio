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

  function anchoyLargo() {
    var capacidadSelect = document.getElementById("selectCapacidad");
    var altoSelect = document.getElementById("selectAlto");
    var anchoSelect = document.getElementById("selectAncho");
    var largoSelect = document.getElementById("selectLargo");
    
    // Obtener el valor seleccionado del select de Capacidad
    var capacidadSeleccionada = capacidadSelect.value;

    // Limpiar las opciones anteriores
    altoSelect.innerHTML = "";
    anchoSelect.innerHTML = "";
    largoSelect.innerHTML = "";

    // Definir las opciones para cada valor de "config"
    if (capacidadSeleccionada === "24 m3") {
      agregarOpcion(altoSelect, "2.91 m");
      agregarOpcion(anchoSelect, "2.60 m");
      agregarOpcion(largoSelect, "9.89 m");
    } else if (capacidadSeleccionada === "30 m3") {
      agregarOpcion(altoSelect, "3.12 m");
      agregarOpcion(anchoSelect, "2.60 m");  
      agregarOpcion(largoSelect, "9.93 m");
    } else if (capacidadSeleccionada === "40 m3") {
      agregarOpcion(altoSelect, "3.75 m");
      agregarOpcion(anchoSelect, "2.60 m");  
      agregarOpcion(largoSelect, "10.00 m");
    }else if (capacidadSeleccionada === "50 m3") {
        agregarOpcion(altoSelect, "4.13 m");
        agregarOpcion(anchoSelect, "2.60 m"); 
        agregarOpcion(largoSelect, "10.33 m"); 
      } else {
      // Si no hay opción seleccionada o es diferente de las definidas, mostrar opción por defecto
      agregarOpcion(altoSelect, "Seleccione una configuración primero");
      agregarOpcion(anchoSelect, "Seleccione una configuración primero");
      agregarOpcion(largoSelect, "Seleccione una configuración primero");

    }
  }
  
  function agregarOpcion(selectElement, opcionTexto) {
    var option = document.createElement("option");
    option.text = opcionTexto;
    selectElement.add(option);
  }

// Cambiar patines de Estacionamiento
function actualizarPatines() {
  var ejesSelect = document.getElementById("ejes");
  var patinesSelect = document.getElementById("patines");

  var ejesSeleccionados = ejesSelect.value;

  patinesSelect.innerHTML = "";

  var option = document.createElement("option");

  if (ejesSeleccionados === "2") {
    option.value = "1 juego de patines";
    option.textContent = "1 juego de patines";
  } else if (ejesSeleccionados === "3") {
    option.value = "2 juegos de patines";
    option.textContent = "2 juegos de patines";
  }
  patinesSelect.appendChild(option);
}
