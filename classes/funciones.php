<?php

use LDAP\Result;

    require_once "config.php";
    
class funciones extends config{
    public function logIn($object){
        $conexion = config::conexion();
        
        if($conexion == false)
            return 3;
        $query = $conexion->prepare("SELECT p.id_p, p.nombre, p.app FROM persona AS p INNER JOIN angeles AS a ON a.id_angel = p.id_p WHERE p.correo = ? AND a.pass = ?");
        $query->bind_param('ss',$object['us'],$object['pass']);
        $query->execute();

        $result = $query->get_result();

        if($result->num_rows > 0){
            $data = $result->fetch_assoc();

            $_SESSION['ID'] = $data['id_p'];
            $_SESSION['NameUs'] = $data['nombre']." ".$data['app'];
            return 1;
        }

        $query->close();

        return 2;
    }

    //Modelo para Vista de comunidad
    public function getAllPerson(){
        $conexion = config::conexion();
        
        if($conexion == false)
            return "err";

        $query = $conexion->prepare("SELECT id_p, nombre, app, apm FROM persona ORDER BY app, apm ASC");
        $query->execute();
        $result = $query->get_result();

        $query->close();

        return $result;
    }


}
?>