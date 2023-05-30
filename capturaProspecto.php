<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="captura.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>capturar prospecto</title>
</head>
<body>
    <div class="container cuerpo">
        <div class="card mt-2">
            <h2 class="card-header text-center">Capturar prospecto</h2>
            <div class="card-body">
                <legend>Datos del prospecto</legend>
                <form action="capturaProspecto.php" method="post">
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required><br>
            
                    <label for="primerApellido">Primer Apellido: </label>
                    <input type="text" class="form-control" id="primerApellido" name="primerApellido" placeholder="Primer Apellido" required><br>
            
                    <label for="segundoApellido">Segundo Apellido: </label>
                    <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" placeholder="Segundo Apellido"><br>
            
                    <label for="calle">Calle: </label>
                    <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" required><br>

                    <label for="numCasa">Numero de casa: </label>
                    <input type="number" class="form-control" id="numCasa" name="numCasa" placeholder="Numero de casa" required><br>
            
                    <label for="colonia">Colonia: </label>
                    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" required><br>
            
                    <label for="codigoPostal">Codigo Postal: </label>
                    <input type="number" class="form-control" id="codigoPostal" name="codigoPostal" placeholder="codigo Postal" required><br>
            
                    <label for="telefono">Telefono: </label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" required><br>
            
                    <label for="Rfc">Rfc: </label>
                    <input type="text" class="form-control" id="Rfc" name="Rfc" placeholder="Rfc" required><br>
            
                    <label for="documento">Documento: </label>
                    <input type="file" class="form-control" id="documento" name="documento"><br>
            
                    <div class="boton">
                        <input type="submit" id="btnAgregar" class="btn btn-success btn-lg" value="enviar">
                        <button class="btn btn-danger btn-lg">salir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php
    require_once 'conexion.php';

    $Nombre = $_POST["nombre"] ?? '';
    $PrimerApellido = $_POST["primerApellido"] ?? '';
    $SegundoApellido=$_POST["segundoApellido"] ?? '';
    $Calle=$_POST["calle"] ?? '';
    $NumCasa=$_POST["numCasa"] ?? 0;
    $Colonia=$_POST["colonia"] ?? '';
    $CodigoPostal=$_POST["codigoPostal"] ?? 0;
    $Telefono=$_POST["telefono"] ?? '';
    $Rfc= $_POST["Rfc"] ?? '';
    $Documento= $_POST["documento"] ?? '';

    function nuevoProspecto(){
        $serverName = "DESKTOP-33G778R";
        $database = "prospectos";
    
        try{
            $conn = new PDO("sqlsrv:server=$serverName;Database=$database");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $spName = "sp_crearProspecto";
            $stmt = $conn->prepare("EXEC $spName @pNombre = ?, @primerApellido = ?, @segundoApellido = ?, @calle = ?, @numCasa = ?, @colonia = ?, @codigoPostal = ?, @telefono = ?, @rfc = ?, @documento = ?");
            global $Nombre, $PrimerApellido, $SegundoApellido, $Calle, $NumCasa, $Colonia, $CodigoPostal, $Telefono, $Rfc, $Documento;
            $stmt->bindParam(1, $Nombre);
            $stmt->bindParam(2, $PrimerApellido);
            $stmt->bindParam(3, $SegundoApellido);
            $stmt->bindParam(4, $Calle);
            $stmt->bindParam(5, $NumCasa);
            $stmt->bindParam(6, $Colonia);
            $stmt->bindParam(7, $CodigoPostal);
            $stmt->bindParam(8, $Telefono);
            $stmt->bindParam(9, $Rfc);
            $stmt->bindParam(10, $Documento);
            $stmt->execute();
            echo "se ha insertado correctamente";
    
        }catch(PDOException $exp){
            die ("ha ocurrido un error al insertar el prospecto: ". $exp->getMessage());
        }
    }
    ?>

    <script src="captura.js"></script>
</body>
</html>