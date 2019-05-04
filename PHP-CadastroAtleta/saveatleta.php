<?php
    include_once("conect.php");
    $atleta = filter_input(INPUT_POST, 'atleta');
    $idade = filter_input(INPUT_POST, 'idade');
    $seleciona_esporte = filter_input(INPUT_POST, 'seleciona_esporte');

    echo"Nome: $atleta <br>";
    echo "Idade: $idade<br>";

    $resultado = "INSERT INTO atleta(nome,idade,esporte_id) VALUES('$atleta','$idade','$seleciona_esporte')";
    $resultado_usuario = mysqli_query($connect,$resultado);
    

    if(mysqli_insert_id($connect)){
        header ('Location: formatleta.php');
    }else ('Location: formatleta.php');

    //$newURL = "atleta.php"; 
    //header('Location: '.$newURL);
?>