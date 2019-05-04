<?php
    $con = mysqli_connect("localhost","root","","dbesportes");
    //INSERT INTO cliente (codigo,nome,endereco) VALUES(1,'walter','rualalala');
    //$stmt = "INSERT INTO cliente (codigo,nome,endereco) VALUES(" . $_POST["txtcodigo"] .
    //        ",'" . $_POST["txtnome"] . "','" . $_POST["txtendereco"] . "')"; 
    //echo $stmt;
    //mysqli_query($con,$stmt);
    if($_POST["txtcodigo"] == "0"){
        $stmt = "INSERT INTO cliente(codigo,nome,endereco) VALUES(?,?,?)";
    }else{
        $stmt = "UPDATE cliente SET nome=?, endereco=? WHERE codigo=?";
    }
    $stmtprep = mysqli_prepare($con, $stmt);
    if($_POST["txtcodigo"] == "0"){
        mysqli_stmt_bind_param($stmtprep, "iss", $_POST["txtcodigo"], 
                                $_POST["txtnome"], $_POST["txtendereco"] );
    }else{
        mysqli_stmt_bind_param($stmtprep, "ssi", $_POST["txtnome"], $_POST["txtendereco"],
                                $_POST["txtcodigo"] );
    }
    mysqli_stmt_execute($stmtprep);

    echo "eu nao acredito";
    var_dump($_POST);
    $newURL = "clientes.php"; 
    header('Location: '.$newURL);
?>