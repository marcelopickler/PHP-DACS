<?php
    session_start();
    include_once("conect.php");
    $atleta_id = filter_input(INPUT_GET, 'id');
    $atleta = filter_input(INPUT_POST, 'atleta');
    $idade = filter_input(INPUT_POST, 'idade');
    $seleciona_esporte = filter_input(INPUT_POST, 'seleciona_esporte');

    $resultado = "delete from atleta where atleta_id = '$atleta_id'";
    $resultado_usuario = mysqli_query($connect,$resultado);
    

    if(mysqli_affected_rows($connect)){
        header ('Location: atleta.php');
    }else ('Location: atleta.php');

    //$newURL = "atleta.php"; 
    //header('Location: '.$newURL);
?>