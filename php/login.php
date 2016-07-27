<?php
include 'db-variables.php';
$email = $_POST["email"];
$pass = $_POST["pass"];
try{
    $sql = "SELECT email, password FROM cliente WHERE email=:email";
    $pdo = new PDO("mysql:host=$host;dbname=$db", $usr, $psw );
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
    $stm = $pdo->prepare( $sql );
    $stm->bindParam( ":email", $email, PDO::PARAM_STR );
    $stm->execute();
    if( $stm->rowCount() === 0 ){
        //No account
        echo "0";
        exit;
    }
    else{
        $cliente = $stm->fetch();
        if( $cliente["password"] === $pass ){
            //Match
            echo "1";
            exit;
        }else{
            //Mismatch
            echo "-1";
            exit;
        }
    }
}catch(PDOException $ex){
    echo $ex->getMessage();
}
?>
