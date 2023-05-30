// let Nombre=document.getElementById("nombre");
// let PrimerApellido=document.getElementById("primerApellido");
// let SegundoApellido=document.getElementById("segundoApellido");
// let Calle=document.getElementById("calle");
// let Colonia=document.getElementById("colonia");
// let CodigoPostal=document.getElementById("codigoPostal");
// let Telefono=document.getElementById("telefono");
// let Rfc=document.getElementById("Rfc");
// let Documento=document.getElementById("documento"); 

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
