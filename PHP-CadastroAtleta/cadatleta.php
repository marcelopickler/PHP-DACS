<!doctype html>
<html>

<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/checkout/">
<title>Cadastro de Esporte</title>
</head>

<body>
<form class="needs-validation" novalidate="">
        <div class="mb-3">
          <label for="idnome">idnome</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">Seu Nome: </span>
            </div>
            <input type="text" class="form-control" id="idnome" required="">
            <div class="invalid-feedback" style="width: 100%;">
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Idade <span class="text-muted">(Opcional)</span></label>
          <input type="number" class="form-control" id="ididade" placeholder="Informe sua idade">
          <div class="invalid-feedback">
          </div>
        </div>
		
        <div class="row">
          <div class="col-md-5 mb-3">
            <label for="idesporte">Esporte</label>
            <select class="custom-select d-block w-100" id="idesporte" required="">
              <option value="">Escolha um...</option>
              <option>xxxx</option>
            </select>
          </div>
        </div>
      </form>

      <?php
        $con = mysqli_connect("localhost","root","","trabesporte"); 
        $query = "SELECT * FROM atleta";
        $result = mysqli_query($con,$query);
        
    ?>

<div class="card">
        <div class="card-body">
            <!--<form action="cliente.php" method="POST">
                <label for="txtnome">Nome</label>
                <input type="text" id="txtnome" name="txtnome"/>
                <label for="txtsobrenome">Sobrenome</label>
                <input type="text" id="txtsobrenome" name="txtsobrenome"/>

                <input type="submit" value="Salvar"/>
            </form> -->
            <?php
                $id = 0;
                $nome = "";
                $endereco = "";
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $con = mysqli_connect("localhost","root","","trabesporte"); 
                    $stmt = "SELECT * FROM cliente WHERE codigo = ?";
                    $stmtprep = mysqli_prepare($con, $stmt);
                    mysqli_stmt_bind_param($stmtprep, "i", $id);
                    mysqli_stmt_execute($stmtprep);
                    $result = mysqli_stmt_get_result($stmtprep);
                    while($row = $result->fetch_row()){
                        $nome = $row[1];
                        $idade = $row[2];
                        $idesporte = $row[3];
                    }

                }
            ?>

    <div class="card">
        <div class="card-body">

            <a href="cadesporte.php" class="btn btn-primary">Novo Atleta</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Cod. Esporte</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($row = $result->fetch_row()){
                    ?>
                    <tr>
                        <td><?=$row[0]?></td>
                        <td><?=$row[1]?></td>
                        <td><?=$row[2]?></td>
                        <td><a href="formclientes.php?id=<?=$row[0]?>"  class="btn btn-primary">Alterar</a> - 
                            <a href="deleteclientes.php?id=<?=$row[0]?>" class="btn btn-danger">Excluir</a></td>

                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>


        </div>
    </div>
</body>
</html>