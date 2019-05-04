<?php 
	<?php
    session_start();
    include_once("conect.php");
    $result_usuario="delete from usuario = 5";
    $resultado_usuario = mysqli_query($connect, $result_usuario);
    $row_usuario = mysqli_fetch_assoc($resultado_usuario);
    ?>
    
    $stmt = "DELETE FROM cliente WHERE codigo = ?";

    $stmtprep = mysqli_prepare($con,$stmt);
    mysqli_stmt_bind_param($stmtprep, "i", $_GET["id"] );
    
    mysqli_stmt_execute($stmtprep);

    $newURL = "clientes.php"; 
    header('Location: '.$newURL);
?>
