<?php

if (isset($_POST["guardar"])){
    require_once("config.php");

    $config = new Estudiante();

    $config-> setNombres($_POST["nombres"]);
    $config-> setDireccion($_POST["direccion"]);
    $config-> setLogros($_POST["logros"]);
    $config-> setIngles($_POST["ingles"]);
    $config-> setSkills($_POST["skills"]);
    $config-> setSer($_POST["ser"]);
    $config-> setReview($_POST["review"]);
    $config-> setEspecialidad($_POST["especialidad"]);

    $config-> insertData();

    echo "<script>
    alert('Los datos fueron guardados satisfactoriamente');document.location = 'estudiantes.php'</script>";
}


?>