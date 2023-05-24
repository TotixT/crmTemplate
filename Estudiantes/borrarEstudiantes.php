<?php
    require_once("config.php");
    $record = new Config();
    if(isset($_GET['id']) && isset($_GET['req']) ){
        if($_GET['req'] == "delete"){
            $record->setId($_GET['id']);
            $record->deleteData();
            echo "<script> alert('Los Datos fueron borrados Exitosamente'); document.location='estudiantes.php' </script>";
        }
    }
?>
