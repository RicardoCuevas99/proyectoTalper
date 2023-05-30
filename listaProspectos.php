<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--  css  -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="lista.css">
    <title>Lista de prospectos</title>
</head>
<body>
<h1 class="text-center">Listado de prospectos</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table id="registros" class="table table-border table-hover" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Estatus</th>
                  </tr>
                </thead>
                <tbody>
                  <td>1</td>
                  <td>Ricardo</td>
                  <td>Lopez</td>
                  <td>Cuevas</td>
                  <td>enviado</td>
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Nombres</th>
                    <th>Primer apellido</th>
                    <th>Segundo apellido</th>
                    <th>Estatus</th>
                  </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div class="boton">
      <button class="btn btn-info">Consultar</button>
    </div>
    
</div>

<?php

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
let table = new DataTable('#registros');
</script>

</body>

</html>