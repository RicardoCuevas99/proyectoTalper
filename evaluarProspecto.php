<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="evaluar.css">
  <title>evaluacion de prospecto</title>
</head>
<body>

  <div class="container cuerpo">
    <div class="card mt-2">
        <div class="card-body">
            <legend>evaluacion del prospecto <style></style></legend>
            <label for="nombre">Nombre: </label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" readonly onmousedown="return false;"><br>
          
            <label for="primerApellido">Primer Apellido: </label>
            <input type="text" class="form-control" id="primerApellido" placeholder="Primer Apellido" readonly onmousedown="return false;"><br>
          
            <label for="segundoApellido">Segundo Apellido: </label>
            <input type="text" class="form-control" id="segundoApellido" placeholder="Segundo Apellido" readonly onmousedown="return false;"><br>
          
            <label for="calle">Calle: </label>
            <input type="text" class="form-control" id="calle" placeholder="Calle" required readonly onmousedown="return false;"><br>
          
            <label for="colonia">Colonia: </label>
            <input type="text" class="form-control" id="colonia" placeholder="Colonia" required readonly onmousedown="return false;"><br>
          
            <label for="codigoPostal">Codigo Postal: </label>
            <input type="number" class="form-control" id="codigoPostal" placeholder="codigo Postal" required readonly onmousedown="return false;"><br>
          
            <label for="telefono">Telefono: </label>
            <input type="number" class="form-control" id="telefono" placeholder="Telefono" required readonly onmousedown="return false;"><br>
          
            <label for="Rfc">Rfc: </label>
            <input type="text" class="form-control" id="Rfc" placeholder="Rfc" required readonly onmousedown="return false;"><br>
          
            <label for="documento">Documento: </label>
            <input type="file" class="form-control" id="documento" ><br>
            <br>
            <label for="estatus">estatus:</label>      
              <select class="form-control" id="estatus">
                <option value="autorizar">Autorizar</option>
                <option value="rechazar">Rechazar</option>
              </select>

            <div class="boton mt-4">
                <button class="btn btn-success btn-lg">aceptar</button>
            </div>
          </div>
        </div>
    </div>
  </div>

</body>
</html>