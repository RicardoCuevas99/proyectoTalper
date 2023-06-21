<?php
  include 'conexion.php';
  
  try{
    $cantidad=0;
    $stmt = $conn->prepare("select nombre, primerApellido, segundoApellido, estatus from prospectos");
    $stmt->execute();
    $datos=$stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "consulta hecha con exito";
  }catch(PDOException $e)
  {
    echo "Error al encontrar registros: " . $e->getMessage();
  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--  boostrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--  css  -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="./styles/lista.css">
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
                  <?php  foreach($datos as $fila) : ?>
                    <?php $cantidad=$cantidad+1 ?>
                    <tr>
                      <td> <?php echo $cantidad; ?> </td>
                      <td> <?php echo $fila['nombre']; ?> </td>
                      <td> <?php echo $fila['primerApellido']; ?> </td>
                      <td> <?php echo $fila['segundoApellido']; ?> </td>
                      <td> <?php echo $fila['estatus']; ?> </td>
                    </tr>
                    <?php endforeach;?>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>let table = new DataTable('#registros');</script>
<!-- <script src="lista.js"></script> -->

</body>

</html>