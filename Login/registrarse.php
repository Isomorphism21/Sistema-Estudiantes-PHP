<?php

if (isset($_POST["registrarse"])){
    require_once("RegistroUser.php");

    $register = new Register();

    $register->setIdCamper(7);
    $register->setEmail($_POST["email"]);
    $register->setUsername($_POST["username"]);
    $register->setPassword($_POST["password"]);

    $register->insertData();


    echo "<script>
    alert('Usuario Registrado Satisfactoriamente');document.location = 'loginRegister.php'</script>";
}

?>