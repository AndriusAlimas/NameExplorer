<?php
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
    try{
        $pdo = new PDO('mysql:host=localhost;dbname=names;charset=utf8mb4','names','86G5omzs(iP.0Uui',$options);
    }catch(PDOException $e){
        echo "A problem occured with the database connection...";
        die();
    }
// test data
$stmt = $pdo->prepare('SELECT * FROM `names`');    
$stmt->execute();
var_dump($stmt->fetch());
?>