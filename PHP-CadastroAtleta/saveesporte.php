<?php
    include_once("conect.php");
    $esporte = filter_input(INPUT_POST, 'esporte');

    echo"Nome: $atleta <br>";
    echo "Idade: $idade<br>";

    $resultado = "INSERT INTO esporte(nome) VALUES('$esporte')";
    $resultado_usuario = mysqli_query($connect,$resultado);
    

    if(mysqli_insert_id($connect)){
        header ('Location: formesporte.php');
    }else ('Location: formesporte.php');

    //$newURL = "atleta.php"; 
    //header('Location: '.$newURL);
?>