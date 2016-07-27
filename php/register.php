<?php
include 'db-variables.php';
$email = $_POST[ "email" ];
$pass = $_POST[ "psw" ];
$name = $_POST[ "name" ];
$apPat = $_POST[ "apPat" ];
$apMat = $_POST[ "apMat" ];
try{
    $pdo = new PDO("mysql:host=$host;dbname=$db", $usr, $psw);
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
    $sql = "SELECT idCliente, email FROM cliente WHERE email=:email";
    $stm = $pdo->prepare( $sql );
    $stm->bindParam(":email", $email, PDO::PARAM_STR);
    $stm->execute();
    if( $stm->rowCount() === 0 ){
        //E-mail not registered yet (OK)
        $sql = "SELECT idCliente FROM cliente";
        $stm = $pdo->prepare( $sql );
        $stm->execute();
        $rs = $stm->fetchAll();
        $id = 0;
        $found = false;
        do{
            $id = rand(0, 200000);
            //Compare id's
            foreach( $rs as $cliente ){
                if( $cliente["idCliente"] == $id ){
                    $found = true;
                    break;
                }
            }
        }while( $found === true );

        $sql = "INSERT INTO cliente VALUES(:id, :nombre, :apPaterno, :apMaterno, :password, :email )";
        $stm = $pdo->prepare( $sql );
        $stm->bindParam(":id", $id, PDO::PARAM_INT);
        $stm->bindParam(":nombre", $name, PDO::PARAM_STR);
        $stm->bindParam(":apPaterno", $apPat, PDO::PARAM_STR);
        $stm->bindParam(":apMaterno", $apMat, PDO::PARAM_STR);
        $stm->bindParam(":password", $pass, PDO::PARAM_STR);
        $stm->bindParam(":email", $email, PDO::PARAM_STR);
        if ( $stm->execute() == true ){
            //OK
            echo "1";
            exit;
        }else{
            //Error
            echo "0";
            exit;
        }


    }else{
        //E-mail registered yet
        echo "-1";
        exit;
    }
}catch( PDOException $ex ){
    echo $ex->getMessage();
}
?>
