<?php
    class Cconexion{
        public static function ConexionBD(){
            $host='localhost';
            $dbname='prospectos';
        
            try{
                $conn = new PDO ("sqlsrv:Server=$host;Database=$dbname");
                echo "Conexión establecida correctamente";
            }
            catch(PDOException $exp){
                die("no se logro conectar correctamente, Error". $exp->getMessage());
            }   
            return $conn;
        }
    }
?>