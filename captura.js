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

elemento.addEventListener("click", function() {
    $.ajax({
        url: "capturarProsepecto.php", // La URL del archivo o servicio que deseas llamar
        method: "POST", // El método HTTP utilizado para la solicitud (GET, POST, etc.)
        data: {}, // Los datos que deseas enviar al servidor
        success: function(response) {
          
          console.log(response); // Manejar la respuesta del servidor aquí
        },
        error: function(xhr, status, error) {
          // La función que se ejecutará si hay un error en la solicitud
          console.error(error); // Manejar el error aquí
        }
      });
});

