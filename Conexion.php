<?php

class Conexion{
    public function gestionarPublicaciones(){
        $conn = mysqli_connect("localhost","root","","test");
        $conn->query("CREATE TABLE if not exists Publicaciones(
            id int not null auto_increment primary key,
            titulo varchar(55),
            descripcion varchar(500),
            autor varchar(25),
            fechapublicacion date
        );");
        $consulta = "INSERT INTO Publicaciones VALUES(?,?,?,?,?)";
        $sentencia = $conn -> prepare($consulta);
        $sentencia->bind_param("issss",$id,$_GET['Titulo'],$_GET['Desc'],$_GET['Autor'],$_GET['Fecha']);
        // $titulo = ;
        // $desc = ;
        // $autor = ;
        // $fecha = ;
        $sentencia->execute();
        $sentencia ->close();
    }
     public function verPubli(){
        $conn = mysqli_connect("localhost","root","","test");
    $consulta  = mysqli_query($conn,"Select*from Publicaciones") or die ("Fallo al realizar la consulta"); 
    while( $row = mysqli_fetch_array ( $consulta )) {
        echo "<tr>";
        echo "<td>".$row [ "id" ]."</td>";
        echo "<td>".$row [ "titulo" ]."</td>";
        echo "<td>".$row [ "autor" ]."</td>";
        echo"<td>".$row [ "fechapublicacion" ]."</td>";
        echo "<td>".$row [ "descripcion" ]."</td>";
        
        echo "</tr>";
    
     }
    }

}

