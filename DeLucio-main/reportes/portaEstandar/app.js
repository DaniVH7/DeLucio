
let documentDefinition; // Declarar la variable fuera del alcance local de la función

function obtenerCotizacionesDesdeAPI() {
    return fetch('obtener_cotizaciones.php')
        .then(response => {
            if (!response.ok) {
                throw new Error("Error al obtener las cotizaciones");
            }
            return response.json();
        })
        .then(data => {
            console.log(data); // Imprimir la respuesta recibida desde el servidor
            if (!data || !Array.isArray(data)) {
                throw new Error("Datos de cotizaciones no válidos");
            }
            return data;
        })
        .catch(error => {
            console.error("Error al obtener las cotizaciones:", error);
            throw error;
        });
}

function cargarCotizacionesEnSelect(cotizaciones) {
    const cotizacionSelect = document.getElementById("cotizacion");

    // Limpiar las opciones actuales en el select
    cotizacionSelect.innerHTML = '';

    // Agregar las nuevas opciones al select
    cotizaciones.forEach(cotizacion => {
        const option = document.createElement("option");
        option.value = cotizacion.id_config;
        option.text = `Cotizacion ${cotizacion.id_config}`;
        cotizacionSelect.appendChild(option);
    });
}

function generarPDF() {
    const cotizacionId = document.getElementById("cotizacion").value;
    const logoElement = document.getElementById('logo');

    const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = logoElement.width;
            canvas.height = logoElement.height;
            ctx.drawImage(logoElement, 0, 0, canvas.width, canvas.height);
            const dataURL = canvas.toDataURL('image/png');
            

    if (cotizacionId === "") {
        // Mostrar un mensaje de error si no se ha seleccionado ninguna cotización
        mostrarError("Seleccione una cotizacion antes de generar el PDF");
    } else {
        // Llamar a la función para generar el PDF utilizando el ID seleccionado
        generarPDFconId(cotizacionId);
    }
}
function obtenerDatosDesdeAPI(id_config) {
    return fetch(`api.php?id_config=${id_config}`)
        .then(response => {
            if (!response.ok) {
                throw new Error("Error al obtener los datos");
            }
            return response.json();
        })
        .catch(error => {
            console.error("Error al obtener los datos:", error);
            throw error;
        });
}


function loadImageAsDataURL(url) {
    return new Promise((resolve, reject) => {
        const image = new Image();
        image.crossOrigin = "Anonymous"; // Permitir el uso de imágenes externas
        image.onload = function () {
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');
            canvas.width = image.width;
            canvas.height = image.height;
            ctx.drawImage(image, 0, 0, canvas.width, canvas.height);
            const dataURL = canvas.toDataURL('image/png');
            resolve(dataURL);
        };
        image.onerror = reject;
        image.src = url;
    });
}

function generarPDFconId(cotizacionId) {
    obtenerDatosDesdeAPI(cotizacionId)
        .then(datos => {
            console.log(datos); // Agrega esta línea para mostrar los datos en la consola
            if (!datos || !Array.isArray(datos)) {
                throw new Error("Datos no válidos");
            }
            const logoUrl = 'logo.png';

            // Cargar la imagen como Data URL utilizando la función loadImageAsDataURL
            loadImageAsDataURL(logoUrl)
                .then(dataURL => {
                    const documentDefinition = {
                        content: [
                            {
                                image: dataURL,
                                width: 200, // Ancho de la imagen en puntos (ajusta según tus necesidades)
                            },
                            {
                                text: "Portacontenedor Estandar",
                                fontSize: 20, // Tamaño de fuente en puntos
                            },
                            {
                                table: {
                                    widths: ['*', '*', '*'],
                                    headerRows: 1,
                                    body: [
                                        ["Nombre", "Correo", "Telefono"],
                                        ...datos.map(row => [   
                                            row.nombre,
                                            row.correo,
                                            row.telefono,
                                            
                                        ])
                                    ],
                                    
                                }
                            },
                           
                           {
                                text: "",
                                margin: [0, 5],
                            }, 
                            {
                                table: {
                                    widths: ['*','*', '*', '*'],
                                    headerRows: 1,
                                    body: [
                                        ["Cotizacion No.","Modelo", "Configuracion", "Color"],
                                        ...datos.map(row => [
                                            row.id_config,
                                            row.modelo,
                                            row.configuracion,
                                            row.color,
                                        ])
                                    ],
                                    
                                }
                            },
                           
                           {
                                text: "",
                                margin: [0, 5],
                            },
                            
                            {
                                table: {
                                    widths: ['*', '*', '*'],                                    
                                    headerRows: 1,
                                    body: [
                                        ["Cabezal frontal", "Cabezal trasero", "Mensulas"],
                                        ...datos.map(row => [
                                            row.cabezal_frontal,
                                            row.cabezal_trasero,
                                            row.mensulas,

                                        ])
                                    ],
                                },
                               
                            },
                            {
                                table: {
                                    widths: ['*', '*', '*', '*','*'],
                                    headerRows: 1,
                                    body: [
                                        ["Llantas", "Medida", "Rin", "Medida", "Material"],
                                        ...datos.map(row => [
                                            row.llantas,
                                            row.llantamedida,
                                            row.rin,
                                            row.rinmedida,
                                            row.material,
                                        ])
                                    ],
                                }
                            },
                            {
                                text: "",
                                margin: [0, 5],
                            },
                            {
                                table: {
                                    widths: ['*', '*', '*', '*'],
                                    headerRows: 1,
                                    body: [
                                        ["Birlo", "Lubricacion", "Patines de estacionamiento", "Gancho de arrastre"],
                                        ...datos.map(row => [
                                            row.birlo,
                                            row.lubricacion,
                                            row.patines,
                                            row.gancho_arrastre,
                                        ])
                                    ],
                                }
                            },
                           
                           {
                                text: "",
                                margin: [0, 5],
                            },
                            {
                                table: {
                                    widths: ['*', '*', '*', '*'],
                                    headerRows: 1,
                                    body: [
                                        ["Ejes", "Porta llantas", "Perno rey", "Susp neumatica"],
                                        ...datos.map(row => [
                                            row.ejes,
                                            row.porta_llantas,
                                            row.perno_rey,
                                            row.susp_neu,
                                        ])
                                    ],
                                }
                            },
                           
                           {
                                text: "",
                                margin: [0, 5],
                            }, 
                            {
                                table: {
                                    widths: ['*', '*', '*','*'],
                                    headerRows: 1,
                                    body: [
                                        ["Frenos neumaticos", "Eje retractil", "Tipo","Guarda lateral"],
                                        ...datos.map(row => [
                                            row.frenos_neu,
                                            row.eje_retractil,
                                            row.tipo,
                                            row.guarda,
                                        ])
                                    ],
                                }
                            },
                           
                           {
                                text: "",
                                margin: [0, 5],
                            }, {
                                text: "",
                                margin: [0, 5],
                            },
                            {
                                table: {
                                    widths: ['*'],
                                    headerRows: 1,
                                    body: [
                                        ["Precio total"],
                                        ...datos.map(row => [
                                            row.precio_total,
                                        ])
                                    ],
                                }
                            },
                        ],
                    };
                    pdfMake.createPdf(documentDefinition).download(`cotizacion_${cotizacionId}.pdf`);
                })
                .catch(error => {
                    console.error("Error al cargar la imagen:", error);
                });
        })
        .catch(error => {
            console.error("Error al obtener los datos:", error);
        
        });
}




obtenerCotizacionesDesdeAPI()
    .then(cotizaciones => {
        cargarCotizacionesEnSelect(cotizaciones);
    })
    .catch(error => {
        console.error("Error al obtener las cotizaciones:", error);
    });

function mostrarError(mensaje) {
    const mensajeErrorDiv = document.getElementById("mensaje-error");
    mensajeErrorDiv.textContent = mensaje;
}