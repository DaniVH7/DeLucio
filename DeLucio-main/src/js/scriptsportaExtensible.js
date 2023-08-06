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

 // Porta llantas
 const labelPortallantas = document.getElementById('mostrarPortallantas');
 const imagenPortallantas = document.getElementById('portallantasOculto');
 // Añadimos un evento al hacer clic en el labelMaterial
 labelPortallantas.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagenPortallantas
     Swal.fire({
         title: 'Porta llantas',
         text: "Aluminio o Acero",
         imageUrl: imagenPortallantas.src,
         imageAlt: 'imagenPortallantas',
         confirmButtonText: 'Cerrar',
         padding: '3em',
         backdrop: `
             rgba(0,0,123,0.4)
             
         `
     });
 });
  // Porta llantas
  const labelPortaloderas = document.getElementById('mostrarPortaloderas');
  const imagenPortaloderas = document.getElementById('loderasOculto');
  // Añadimos un evento al hacer clic en el labelMaterial
  labelPortaloderas.addEventListener('click', () => {
      // Mostramos el SweetAlert con la imagenPortaloderas
      Swal.fire({
          title: 'Porta loderas',
          imageUrl: imagenPortaloderas.src,
          imageAlt: 'imagenPortaloderas',
          confirmButtonText: 'Cerrar',
          padding: '3em',
          backdrop: `
              rgba(0,0,123,0.4)
              
          `
      });
  });

   // Lubricacion
   const labelLub = document.getElementById('mostrarLub');
   const imagenLub = document.getElementById('lubOculto');
   // Añadimos un evento al hacer clic en el labelMaterial
   labelLub.addEventListener('click', () => {
       // Mostramos el SweetAlert con la imagenPortallantas
       Swal.fire({
           title: 'Lubricacion',
           text: "Grasa o Aceite",
           imageUrl: imagenLub.src,
           imageAlt: 'imagenLub',
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

 //Llantas
 const labelLlantas = document.getElementById('mostrarLlantas');
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
         title: 'Material',
         text: "Aluminio o Acero",
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
// Añadimos un evento al hacer clic en el labelMaterial
labelPatines.addEventListener('click', () => {
   // Mostramos el SweetAlert con la imagenPortallantas
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

 //Birlo
 const labelBirlo = document.getElementById('mostrarBirlo');
 const imagenBirlo = document.getElementById('birloOculto');
 // Añadimos un evento al hacer clic en el labelMaterial
 labelBirlo.addEventListener('click', () => {
  // Mostramos el SweetAlert con la imagenPortallantas
  Swal.fire({
    title: 'Birlo',
    text: "Corto o Largo",
    imageUrl: imagenBirlo.src,
    imageAlt: 'imagenBirlo',
    confirmButtonText: 'Cerrar',
    padding: '3em',
    color: '#c3c3c3',
    backdrop: `
      rgba(0,0,123,0.4)
      url("/src/img/logo.png)`
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
       text: "Wallace Forge",
       imageUrl: imagenPerno.src,
       imageAlt: 'imagenPerno',
       confirmButtonText: 'Cerrar',
       padding: '3em',
       color: '#c3c3c3',
       backdrop: `
         rgba(0,0,123,0.4)
         url("/src/img/logo.png)`
     });
 });