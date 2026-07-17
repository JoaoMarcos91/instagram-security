<?php

$conn = new mysqli(
    "localhost",
    "joao4944_user",
    "vlnFgt2012",
    "joao4944_login"
);

if ($conn->connect_error) {
    die("Erro de conexão");
}

?>