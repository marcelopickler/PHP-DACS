<?php
    session_start();
    include_once("conect.php");
    $atleta_id = filter_input(INPUT_POST, 'id');
    $atleta = filter_input(INPUT_POST, 'atleta');
    $idade = filter_input(INPUT_POST, 'idade');
    $seleciona_esporte = filter_input(INPUT_POST, 'seleciona_esporte');

    echo"Nome: $atleta <br>";
    echo "Idade: $idade<br>";

    $resultado = "update atleta set nome = '$atleta', idade = '$idade', esporte_id='$seleciona_esporte' where atleta_id = '$atleta_id'";
    $resultado_usuario = mysqli_query($connect,$resultado);
    
    if(mysqli_affected_rows($connect)){
        $_SESSION['msg']="<p style 'color:green;'>Usuário Editado com sucesso</p>";
        header("Location: atleta.php");
    }else {('Location: formatleta.php');
    }
/*
Antes
    if(mysqli_affected_rows($connect)){
        header ('Location: formatleta.php');
    }else ('Location: formatleta.php');
*/
    //$newURL = "atleta.php"; 
    //header('Location: '.$newURL);
?>