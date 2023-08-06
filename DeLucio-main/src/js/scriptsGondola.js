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


 // Label con imagenes
 const labelMaterial = document.getElementById('mostrarMaterial');
 const imagen = document.getElementById('materialOculto');
 // Añadimos un evento al hacer clic en el 
 labelMaterial.addEventListener('click', () => {
     // Mostramos el SweetAlert con la 
     Swal.fire({
         title: 'Material',
         text: "Aluminio o Acero",
         imageUrl: imagen.src,
         imageAlt: 'Imagen',
         confirmButtonText: 'Cerrar',
         padding: '3em',
         backdrop: `
             rgba(0,0,123,0.4)
             
         `
     });
 });


 //Llantas
 const labelLlantas = document.getElementById('mostrarLlanta');
 const imagenLlantas = document.getElementById('llantasOculto');
 // Añadimos un evento al hacer clic en el 
 labelLlantas.addEventListener('click', () => {
     // Mostramos el SweetAlert con la 
     Swal.fire({
         title: 'Llantas',
         imageUrl: imagenLlantas.src,
         imageAlt: 'imagenLlantas',
         confirmButtonText: 'Cerrar',
         padding: '3em',
         backdrop: `
             rgba(0,0,123,0.4)
             
         `
     });
 });

 //Rin
 const labelRin = document.getElementById('mostrarRin');
 const imagenRin = document.getElementById('rinOculto');
 // Añadimos un evento al hacer clic en el 
 labelRin.addEventListener('click', () => {
     // Mostramos el SweetAlert con la 
     Swal.fire({
         title: 'Rin',
         imageUrl: imagenRin.src,
         imageAlt: 'imagenRin',
         confirmButtonText: 'Cerrar',
         padding: '3em',
         backdrop: `
             rgba(0,0,123,0.4)
             
         `
     });
 });


 // Placa gancho de arrastre
 const labelGancho = document.getElementById('mostrarGancho');
 const imagenGancho = document.getElementById('ganchoOculto');
 // Añadimos un evento al hacer clic en el 
 labelGancho.addEventListener('click', () => {
     // Mostramos el SweetAlert con la 
     Swal.fire({
         title: 'Placa gancho de Arrastre',
         imageUrl: imagenGancho.src,
         imageAlt: 'imagenGancho',
         confirmButtonText: 'Cerrar',
         padding: '3em',
         backdrop: `
             rgba(0,0,123,0.4)
             
         `
     });
 });

// Patines de Estacionamiento
const labelPatines = document.getElementById('mostrarPatines');
const imagenPatines = document.getElementById('patinesOculto');
// Añadimos un evento al hacer clic en el 
labelPatines.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Patines de Estacionamiento',
       imageUrl: imagenPatines.src,
       imageAlt: 'imagenPatines',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Manivelas
const labelManivelas = document.getElementById('mostrarManivelas');
const imagenManivelas = document.getElementById('manivelasOculto');
// Añadimos un evento al hacer clic en el 
labelManivelas.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Manivelas',
       imageUrl: imagenManivelas.src,
       imageAlt: 'imagenManivelas',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Perno rey
const labelPerno = document.getElementById('mostrarPerno');
const imagenPerno = document.getElementById('pernoOculto');
// Añadimos un evento al hacer clic en el 
labelPerno.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Perno rey',
       imageUrl: imagenPerno.src,
       imageAlt: 'imagenPerno',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Perno rey
const labelBirlo = document.getElementById('mostrarBirlo');
const imagenBirlo = document.getElementById('birloOculto');
// Añadimos un evento al hacer clic en el 
labelBirlo.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Birlo',
       imageUrl: imagenBirlo.src,
       imageAlt: 'imagenBirlo',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Placa personalizada
const labelperso = document.getElementById('mostrarPlacaperso');
const imagenPerso = document.getElementById('placaOculto');
// Añadimos un evento al hacer clic en el 
labelperso.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Placa personalizada',
       imageUrl: imagenPerso.src,
       imageAlt: 'imagenPerso',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// letrero de precaucion
const labelprecaucion = document.getElementById('mostrarPrecaucion');
const imagenPrecaucion = document.getElementById('letreroOculto');
// Añadimos un evento al hacer clic en el 
labelprecaucion.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Letrero de Doble semiremolque',
       imageUrl: imagenPrecaucion.src,
       imageAlt: 'imagenPrecaucion',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// letrero de precaucion
const labelPortallantas = document.getElementById('mostrarPortallantas');
const imagenPortallantas = document.getElementById('portallantasOculto');
// Añadimos un evento al hacer clic en el 
labelPortallantas.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Porta llantas',
       imageUrl: imagenPortallantas.src,
       imageAlt: 'imagenPortallantas',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// letrero de precaucion
const labelRetractil = document.getElementById('mostrarRetractil');
const imagenRetractil = document.getElementById('retractilOculto');
// Añadimos un evento al hacer clic en el 
labelRetractil.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Eje retractil',
       imageUrl: imagenRetractil.src,
       imageAlt: 'imagenRetractil',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// letrero de precaucion
const labelInflado = document.getElementById('mostrarInflado');
const imagenInflado = document.getElementById('infladoOculto');
// Añadimos un evento al hacer clic en el 
labelInflado.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Auto inflado',
       imageUrl: imagenInflado.src,
       imageAlt: 'imagenInflado',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Caja de herramientas
const labelCaja = document.getElementById('mostrarCaja');
const imagenCaja = document.getElementById('cajaOculto');
// Añadimos un evento al hacer clic en el 
labelCaja.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Caja de Herramientas',
       imageUrl: imagenCaja.src,
       imageAlt: 'imagenCaja',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Guarda lateral
const labelGuarda = document.getElementById('mostrarGuarda');
const imagenGuarda = document.getElementById('guardaOculto');
// Añadimos un evento al hacer clic en el 
labelGuarda.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Guarda lateral',
       imageUrl: imagenGuarda.src,
       imageAlt: 'imagenGuarda',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});