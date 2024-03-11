<?php
 
class Api{

public function getTeams(){
$list = array();
$conexion = new Conexion();
$db = $conexion->getConexion();
$sql = "SELECT * FROM usuario";
$query = $db->prepare($sql);
$query->execute();

while($row = $query->fetch()){
    $list[]=array(
        "nombre"=>$row["nombre"],
        "apellido"=>$row["apellido"],
        "email"=>$row["email"],
        "contrasena"=>$row["contrasena"],

    );
}
return $list;
}



}

?>