<?php

class Conexion{
    public function gestionarPublicaciones(){
        $conn = mysqli_connect("localhost","root","","test");;
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
}