<?php
class conexion{
    public function conectar(){
        $servername=getenv("bhlut4j4kuhxsivd4hrp-mysql.services.clever-cloud.com");
        $username=getenv("uvhyhfvxsavrkktw");
        $password=getenv("2w5zMYBaRxgZ5aeDVXTw");
        $dbname=getenv("bhlut4j4kuhxsivd4hrp");
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn ){
            echo("Error en la conexion".mysqli_connect_error());
        }else{
            echo("conectado")
            return $conn;
        }
     
    }

}

?>