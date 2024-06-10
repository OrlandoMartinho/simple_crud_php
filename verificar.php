<?php

$username = $_POST['username'];
$password = $_POST['password'];


if ($username=='Laurinda'&&$password=='1234') {
    header("Location: Ficha-De-Ocorrência-ADM.php");
    exit();
} else {
    echo "Nome de usuário ou senha inválidos.";
}

?>
