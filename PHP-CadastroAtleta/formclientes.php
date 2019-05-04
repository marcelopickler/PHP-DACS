<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
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
                $idatleta = 0;
                $nome = "";
                $idade = 0;
                $idesporte = 0;
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $con = mysqli_connect("localhost","root","","trabesporte"); 
                    $stmt = "SELECT * FROM atleta WHERE atleta_id = ?";
                    $stmtprep = mysqli_prepare($con, $stmt);
                    mysqli_stmt_bind_param($stmtprep, "i", $id);
                    mysqli_stmt_execute($stmtprep);
                    $result = mysqli_stmt_get_result($stmtprep);
                    while($row = $result->fetch_row()){
                        $nome = $row[1];
                        $endereco = $row[2];
                    }

                }
            ?>
            <form action="savecliente.php" method="POST">
                
                <input type="hidden" class="form-control" id="txtatleta"  placeholder="Digite o código" 
                    name="txtatleta"  value="<?=$idatleta?>">
                
                <div class="form-group">
                    <label for="txtnome">Nome</label>
                    <input type="text" class="form-control" id="txtnome" placeholder="Digite seu nome"
                    name="txtnome" value="<?=$nome?>">
                </div>
                <div class="form-group">
                    <label for="txtendereco">Idade</label>
                    <input type="text" class="form-control" id="txtidade" placeholder="Digite sua idade"
                    name="txtidade" value="<?=$idade?>">
                </div>
                <input type="hidden" class="form-control" id="txtcodesporte"  placeholder="Digite o código" 
                    name="txtcodesporte"  value="<?=$idesporte?>">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>