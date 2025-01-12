<?php
class conexion{
    public function conectar(){
        $servername=getenv('servername');
        $username=getenv('username');
        $password=getenv('password');
        $dbname=getenv('dbname');
        $conn=mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn ){
            echo("Error en la conexion".mysqli_connect_error());
        }else{
            return $conn;
        }
     
    }

}

?>