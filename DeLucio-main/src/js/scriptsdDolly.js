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

// Label con imagenes
 const labelMaterial = document.getElementById('mostrarImagen');
 const imagen = document.getElementById('imagenOculta');
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
           url("/src/img/logo.png)         `
       })
 });

 //Birlo
 const labelBirlo = document.getElementById('mostrarBirlo');
 const imagenBirlo = document.getElementById('birloOculto');
 // Añadimos un evento al hacer clic en el labelBirlo
 labelBirlo.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagenBirlo
     Swal.fire({
         title: 'Birlo',
         text: "Corto o Largo",
         imageUrl: imagenBirlo.src,
         imageAlt: 'imagenBirlo',
         confirmButtonText: 'Cerrar',
         padding: '3em',

         backdrop: `
           rgba(0,0,123,0.4)
           url("/src/img/logo.png)         `
       })
 });

 //Lubricacion
 const labelLub = document.getElementById('mostrarLub');
 const imagenLub = document.getElementById('lubOculto');
 // Añadimos un evento al hacer clic en el labelLub
 labelLub.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagenLub
     Swal.fire({
         title: 'Lubricacion',
         text: "Grasa o Aceite",
         imageUrl: imagenLub.src,
         imageAlt: 'imagenLub',
         confirmButtonText: 'Cerrar',
         padding: '3em',

         backdrop: `
           rgba(0,0,123,0.4)
           url("/src/img/logo.png)         `
       })
 });
 //Susp neumatica
 const labelSusp = document.getElementById('mostrarSusp');
 const imagenSusp = document.getElementById('suspOculto');
 // Añadimos un evento al hacer clic en el labelSusp
 labelSusp.addEventListener('click', () => {
     // Mostramos el SweetAlert con la imagenSusp
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
       })
 });
//Portaplacas
const labelPlacas = document.getElementById('mostrarPlacas');
const imagenPlacas = document.getElementById('placasOculta');
// Añadimos un evento al hacer clic en el labelPlacas
labelPlacas.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Porta placas',
        imageUrl: imagenPlacas.src,
        imageAlt: 'imagenBirlo',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});

//Auto inflado
const labelInflado = document.getElementById('mostrarInflado');
const imagenInflado = document.getElementById('infladoOculta');
// Añadimos un evento al hacer clic en el labelInflado
labelInflado.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Auto inflado',
        imageUrl: imagenInflado.src,
        imageAlt: 'imagenBirlo',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});
//Porta loderas
const labelLoderas = document.getElementById('mostrarLoderas');
const imagenLoderas = document.getElementById('loderaOculta');
// Añadimos un evento al hacer clic en el labelLoderas
labelLoderas.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Porta loderas',
        imageUrl: imagenLoderas.src,
        imageAlt: 'imagenBirlo',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});
// Eje Retractil
const labelRetractil = document.getElementById('mostrarRetractil');
const imagenRetractil = document.getElementById('retractilOculta');
// Añadimos un evento al hacer clic en el labelRetractil
labelRetractil.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Eje retractil',
        imageUrl: imagenRetractil.src,
        imageAlt: 'imagenBirlo',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});
// Eje
const labelEjes = document.getElementById('mostrarEjes');
const imagenEjes = document.getElementById('ejesOculta');
// Añadimos un evento al hacer clic en el labelEjes
labelEjes.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Ejes',
        imageUrl: imagenEjes.src,
        imageAlt: 'imagenEjes',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});

//Ojillo tiron
const labelOjillo = document.getElementById('mostrarOjillo');
const imagenOjillo = document.getElementById('ojilloOculta');
// Añadimos un evento al hacer clic en el labelOjillo
labelOjillo.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Ojillo Tiron',
        text: "Premier",
        imageUrl: imagenOjillo.src,
        imageAlt: 'imagenOjillo',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});
//Larza
const labelLanza = document.getElementById('mostrarLanza');
const imagenLanza = document.getElementById('lanzaOculta');
// Añadimos un evento al hacer clic en el labelLanza
labelLanza.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Material',
        text: "Aluminio o Acero",
        imageUrl: imagenLanza.src,
        imageAlt: 'imagenLanza',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});
//Quinta rueda
const labelQuinta = document.getElementById('mostrarQuinta');
const imagenQuinta = document.getElementById('QuintaOculta');
// Añadimos un evento al hacer clic en el labelQuinta
labelQuinta.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Quinta Rueda',
        text: "Holland FW35",
        imageUrl: imagenQuinta.src,
        imageAlt: 'imagenQuinta',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});
//LLantas
const labelLanta = document.getElementById('mostrarLlanta');
const imagenLlanta = document.getElementById('llantaOculta');
// Añadimos un evento al hacer clic en el labelLanta
labelLanta.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Llantas',
        imageUrl: imagenLlanta.src,
        imageAlt: 'imagenLlanta',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});

//Rin
const labelRin = document.getElementById('mostrarRin');
const imagenRin = document.getElementById('rinOculta');
// Añadimos un evento al hacer clic en el labelRin
labelRin.addEventListener('click', () => {
    // Mostramos el SweetAlert con la imagenBirlo
    Swal.fire({
        title: 'Rines',
        text: "Aluminio o Acero",
        imageUrl: imagenRin.src,
        imageAlt: 'imagenRin',
        confirmButtonText: 'Cerrar',
        padding: '3em',
        backdrop: `
          rgba(0,0,123,0.4)
          url("/src/img/logo.png)`
      })
});