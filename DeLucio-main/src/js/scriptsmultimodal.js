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


 // Label con imagenes
 const labelMaterial = document.getElementById('mostrarMaterial');
 const imagen = document.getElementById('materialOculto');
 // Añadimos un evento al hacer clic en el labelMaterial
 labelMaterial.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagen
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
 // Añadimos un evento al hacer clic en el labelMaterial
 labelLlantas.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagenPortallantas
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
 // Añadimos un evento al hacer clic en el labelMaterial
 labelRin.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagenPortallantas
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

  //Eje retractil
  const labelRetractil = document.getElementById('mostrarRetractil');
  const imagenRetractil = document.getElementById('retractilOculto');
  // Añadimos un evento al hacer clic en el labelMaterial
  labelRetractil.addEventListener('click', () => {
      // Mostramos el SweetAlert con la imagenPortallantas
      Swal.fire({
          title: 'Eje retractil',
          imageUrl: imagenRetractil.src,
          imageAlt: 'imagenRetractil',
          confirmButtonText: 'Cerrar',
          padding: '3em',
          backdrop: `
              rgba(0,0,123,0.4)
              
          `
      });
  });

   //Suspension Neumatica
   const labelSusp = document.getElementById('mostrarSusp');
   const imagenSusp = document.getElementById('suspOculto');
   // Añadimos un evento al hacer clic en el labelMaterial
   labelSusp.addEventListener('click', () => {
       // Mostramos el SweetAlert con la imagenPortallantas
       Swal.fire({
         title: 'Suspensión neumatica',
         text: "Azteca King",
         imageUrl: imagenSusp.src,
         imageAlt: 'imagenSusp',
         confirmButtonText: 'Cerrar',
         padding: '3em',
         backdrop: `
           rgba(0,0,123,0.4)
           url("/src/img/logo.png)`
       });
   });

 // Placa gancho de arrastre
 const labelGancho = document.getElementById('mostrarGancho');
 const imagenGancho = document.getElementById('ganchoOculto');
 // Añadimos un evento al hacer clic en el labelMaterial
 labelGancho.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagenPortallantas
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


// Manivelas
const labelManivelas = document.getElementById('mostrarManivelas');
const imagenManivelas = document.getElementById('manivelasOculto');
// Añadimos un evento al hacer clic en el labelMaterial
labelManivelas.addEventListener('click', () => {
   // Mostramos el SweetAlert con la imagenPortallantas
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

// Porta llantas
const labelPorta = document.getElementById('mostrarPortallantas');
const imagenPorta = document.getElementById('portallantasOculto');
// Añadimos un evento al hacer clic en el labelMaterial
labelPorta.addEventListener('click', () => {
   // Mostramos el SweetAlert con la imagenPortallantas
   Swal.fire({
       title: 'Portallantas',
       imageUrl: imagenPorta.src,
       imageAlt: 'imagenPorta',
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
// Añadimos un evento al hacer clic en el labelMaterial
labelPerno.addEventListener('click', () => {
   // Mostramos el SweetAlert con la imagenPortallantas
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


// Caja de herramientas
const labelCaja = document.getElementById('mostrarCaja');
const imagenCaja = document.getElementById('cajaOculto');
// Añadimos un evento al hacer clic en el labelMaterial
labelCaja.addEventListener('click', () => {
   // Mostramos el SweetAlert con la imagenPortallantas
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
// Añadimos un evento al hacer clic en el labelMaterial
labelGuarda.addEventListener('click', () => {
   // Mostramos el SweetAlert con la imagenPortallantas
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
// Piso
const labelPiso = document.getElementById('mostrarPiso');
const imagenPiso = document.getElementById('pisoOculto');
// Añadimos un evento al hacer clic en el labelMaterial
labelPiso.addEventListener('click', () => {
   // Mostramos el SweetAlert con la imagenPortallantas
   Swal.fire({
       title: 'Piso',
       imageUrl: imagenPiso.src,
       imageAlt: 'imagenPiso',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
           rgba(0,0,123,0.4)
           
       `
   });
});