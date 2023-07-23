//Dolly
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
  }
}

function actualizarMedida() {
  var selectLlanta = document.getElementById("llanta_medida");
  var selectRinMedida = document.getElementById("rin_medida");

  var llanta_medida = selectLlanta.value;

  selectRinMedida.innerHTML = "";

  var option = document.createElement("option");

  if (llanta_medida === "11R22.5") {
      option.value = "11R22.5";
      option.textContent = "11R22.5";
  } else if (llanta_medida === "11R24.5") {
      option.value = "11R24.5";
      option.textContent = "11R24.5";
  }

  selectRinMedida.appendChild(option);
}


// Plana
function actualizarMedidaplana() {
  var selectLlanta = document.getElementById("llanta_medida");
  var selectRinMedida = document.getElementById("rin_medida");

  var llanta_medida = selectLlanta.value;

  selectRinMedida.innerHTML = "";

  var option = document.createElement("option");

  if (llanta_medida === "11R22.5") {
      option.value = "11R22.5";
      option.textContent = "11R22.5";
  } else if (llanta_medida === "11R24.5") {
      option.value = "11R24.5";
      option.textContent = "11R24.5";
  }

  selectRinMedida.appendChild(option);
}
