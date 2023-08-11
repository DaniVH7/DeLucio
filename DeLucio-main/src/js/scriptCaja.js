
function actualizarRin() {
    var selectLlanta = document.getElementById("llantas");
    var selectRin = document.getElementById("rin");
  
    var llantaseleccionada = selectLlanta.value;
  
    selectRin.innerHTML = "";
    
    // Agregar opciones al elemento selectRin
    if (llantaseleccionada === "8") {
        var option = document.createElement("option");
        option.value = "Rin 1";
        option.textContent = "Rin 1";
        selectRin.appendChild(option);
    } else if (llantaseleccionada === "otro_valor") {
        // Agregar otras opciones según sea necesario
    }
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


 // Label con imagenes
 const labelPiso = document.getElementById('mostrarPiso');
 const imagenPiso = document.getElementById('pisoOculto');
 // Añadimos un evento al hacer clic en el 
 labelPiso.addEventListener('click', () => {
     // Mostramos el SweetAlert con la 
     Swal.fire({
         title: 'Piso',
         imageUrl: imagenPiso.src,
         imageAlt: 'imagenPiso',
         confirmButtonText: 'Cerrar',
         padding: '3em',
         backdrop: `
             rgba(0,0,123,0.4)
             
         `
     });
 });


 //Llantas
 const labelLlantas = document.getElementById('mostrarLlanta');
 const imagenLlantas = document.getElementById('llantasOculta');
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
 const labelForro = document.getElementById('mostrarForro');
 const imagenForro = document.getElementById('forroOculto');
 // Añadimos un evento al hacer clic en el 
 labelForro.addEventListener('click', () => {
     // Mostramos el SweetAlert con la 
     Swal.fire({
         title: 'Forro',
         imageUrl: imagenForro.src,
         imageAlt: 'imagenForro',
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
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Perno rey
const labelpanel = document.getElementById('mostrarPaneles');
const imagenPanel = document.getElementById('panelesOculta');
// Añadimos un evento al hacer clic en el 
labelpanel.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Birlo',
       imageUrl: imagenPanel.src,
       imageAlt: 'imagenPanel',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Placa personalizada
const labelPostes = document.getElementById('mostrarPostes');
const imagenPostes = document.getElementById('postesOculto');
// Añadimos un evento al hacer clic en el 
labelPostes.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Placa personalizada',
       imageUrl: imagenPostes.src,
       imageAlt: 'imagenPostes',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});


// Suspencion neumatica
const labelSusp = document.getElementById('mostrarSusp');
const imagenSusp = document.getElementById('suspOculto');
// Añadimos un evento al hacer clic en el 
labelSusp.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Suspension Neumatica',
       imageUrl: imagenSusp.src,
       imageAlt: 'imagenSusp',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// letrero de precaucion
const labelMarco = document.getElementById('mostrarMarco');
const imagenMarco = document.getElementById('marcoOculto');
// Añadimos un evento al hacer clic en el 
labelMarco.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Letrero de Doble semiremolque',
       imageUrl: imagenMarco.src,
       imageAlt: 'imagenMarco',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// letrero de precaucion
const labelPuertas = document.getElementById('mostrarPuertas');
const imagenPuertas = document.getElementById('puertaOculta');
// Añadimos un evento al hacer clic en el 
labelPuertas.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Puertas',
       imageUrl: imagenPuertas.src,
       imageAlt: 'imagenPuertas',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});


// letrero de precaucion
const labelLoderas = document.getElementById('mostrarLoderas');
const imagenLoderas = document.getElementById('loderasOculto');
// Añadimos un evento al hacer clic en el 
labelLoderas.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Loderas',
       imageUrl: imagenLoderas.src,
       imageAlt: 'imagenLoderas',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});

// Guarda lateral
const labelLlanta = document.getElementById('mostrarLlanta');
const imagenLlanta = document.getElementById('llantaOculta');
// Añadimos un evento al hacer clic en el 
labelLlanta.addEventListener('click', () => {
   // Mostramos el SweetAlert con la 
   Swal.fire({
       title: 'Llantas',
       imageUrl: imagenLlanta.src,
       imageAlt: 'imagenLlanta',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});