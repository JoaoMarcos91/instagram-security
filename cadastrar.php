<?php

header("Access-Control-Allow-Origin: https://seudominio.vercel.app");
header("Access-Control-Allow-Methods: POST");


include "config.php";


$username = $_POST["username"];
$password = $_POST["password"];


$stmt = $conn->prepare(
    "INSERT INTO users (username, password)
     VALUES (?, ?)"
);


$stmt->bind_param(
    "ss",
    $username,
    $password
);


if($stmt->execute()){

    echo "OK";

}else{

    echo "ERRO";

}


$stmt->close();
$conn->close();

?>