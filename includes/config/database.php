<?php

function conectarDB() : mysqli {
    $db = mysqli_connect('localhost', 'root', 'root', 'bienesraices_crud');

    if(!$db){
        echo "Error de conecxión con la Base de datos";
        exit;
    }

    return $db;
}

//Ejemplo de cómo  crear un usuario con password Hash
/* $email = "xxxxx@xxxxx.com";
$pasword = "xxxxxxxx";
$passwordHash = password_hash($pasword, PASSWORD_BCRYPT);
$query = "INSERT INTO usuarios (email, password) VALUES ('$email', '$passwordHash')"; */