let Nombre=document.getElementById("nombre").Value;
let PrimerApellido=document.getElementById("primerApellido").Value;
let SegundoApellido=document.getElementById("segundoApellido").Value;
let Calle=document.getElementById("calle").Value;
let Colonia=document.getElementById("colonia").Value;
let CodigoPostal=document.getElementById("codigoPostal").Value;
let Telefono=document.getElementById("telefono").Value;
let Rfc=document.getElementById("Rfc").Value;
let Documento=document.getElementById("documento").Value; 

let elemento=document.getElementById("#btnAgregar");

$(document).ready(function() {
  $('#btnAgregar').submit(function(event) {
    event.preventDefault(); // Evita que se envíe el formulario de forma convencional

    // Obtiene los datos del formulario
    var formData = $(this).serialize();

    // Realiza la petición AJAX
    $.ajax({
      url: 'procesar.php', // Ruta al archivo PHP que procesará la petición
      type: 'POST',
      data: formData,
      success: function(response) {
        alert(response); // Muestra la respuesta del servidor
      },
      error: function(xhr, status, error) {
        console.log(error); // Muestra el error en la consola
      }
    });
  });
});
