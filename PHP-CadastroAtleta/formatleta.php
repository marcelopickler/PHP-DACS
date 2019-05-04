<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Cadastro de Atleta</title>
  </head>
  <body>
    <div class="card">
        <div class="card-body">
            <?php
                include_once("conect.php");
            ?>
            <form action="saveatleta.php" method="POST">

                <div class="form-group">
                    <label>Nome</label>
                    <input type="text" class="form-control" placeholder="Digite seu nome"
                    name="atleta">
                </div>
                <div class="form-group">
                    <label>Idade</label>
                    <input type="text" class="form-control" placeholder="Digite sua idade"
                    name="idade">
                </div>
                <label>Selecione um esporte</label>
                <select name="seleciona_esporte"> 
                    <option>Escolha</option>
                    <?php
                        $seleciona_esportes = "SELECT * FROM esporte";
                        $resultado_seleciona_esportes = mysqli_query($connect, $seleciona_esportes);
                        while($row_esportes = mysqli_fetch_assoc($resultado_seleciona_esportes)){?>
                            <option value = "<?php echo $row_esportes['esporte_id'];?>"><?php echo $row_esportes['nome'];?></option><?php
                        }
                    ?>
                </select>
                <br><br>
                <button type="submit" class="btn btn-dark">Cadastrar</button>
                <a href="atleta.php" class="btn btn-danger">Cancelar</a>
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