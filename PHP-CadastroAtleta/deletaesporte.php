<?php
    session_start();
    include_once("conect.php");
    $esporte_id = filter_input(INPUT_GET, 'id');
    $esporte = filter_input(INPUT_POST, 'esporte');
    $seleciona_esporte = filter_input(INPUT_POST, 'seleciona_esporte');

    $resultado = "delete from esporte where esporte_id = '$esporte_id'";
    $resultado_usuario = mysqli_query($connect,$resultado);
    

    if(mysqli_affected_rows($connect)){
        header ('Location: esportes.php');
    }else ('Location: esportes.php');

    //$newURL = "atleta.php"; 
    //header('Location: '.$newURL);
?>