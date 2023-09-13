<?php $professores = $_REQUEST["professores"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de professores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>

  <div class="row text-center">
      <h2>Semana da acessibilidade</h2>
  </div>

  <div>
      <img class="rounded mx-auto d-block" src="https://www.cnj.jus.br/wp-content/uploads/2022/09/tjsp-acessibilidade.png" alt="">
  </div>
  <br>
  <a href="/<?php echo FOLDER; ?>/?controller=Professor&acao=salvar" class="btn btn-success">Cadastrar estudante</a>
  <br>
  <br>
  <table class="table table-dark">
      <thead>
          <tr>
              <th scope="col">Id</th>
              <th scope="col">Nome</th>
              <th scope="col">Idade</th>
          </tr>
      </thead>
      <tbody>
          <?php foreach ($professores as $professorAtual) { ?>
              <tr>
                  <td><?php echo $professorAtual['id']; ?></td>
                  <td><?php echo $professorAtual['nome']; ?></td>
                  <td><?php echo $professorAtual['idade']; ?></td>
              </tr>
          <?php } ?>
      </tbody>
  </table>
</body>
</html>