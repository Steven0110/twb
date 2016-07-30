<?php
include 'db-variables.php';
$stores_json = "{\"stores\":[";
try{
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $usr, $psw);
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET names 'utf8'");
    $sql = "SELECT * from sucursal";
    $stm = $pdo->prepare( $sql );
    $stm->execute();
    $rs = $stm->fetchAll();
    foreach( $rs as $store ){
        $stores_json.= "{\"id\":\"".$store["idSucursal"]."\",";
        $stores_json.= "\"name\":\"".$store["nombre"]."\",";
        $stores_json.= "\"dir\":\"".$store["direccion"]."\",";
        $stores_json.= "\"posX\":\"".$store["posX"]."\",";
        $stores_json.= "\"posY\":\"".$store["posY"]."\",";
        $stores_json.= "\"tel\":\"".$store["telefono"]."\",";
        $stores_json.= "\"email\":\"".$store["email"]."\"},";
    }
    $stores_json = rtrim($stores_json, ",");
    $stores_json.= "]}";
    echo $stores_json;
}catch(PDOException $ex){
    echo $ex->getMessage();
}
?>
