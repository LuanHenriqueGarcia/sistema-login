<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <title>Cadastro</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Cadastro</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          <a class="nav-link" href="entrar.php">Entrar</a>
          <a class="nav-link" href="?page=pageCadastrar">Novo Usuário</a>
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
        <?php
        include("config.php");
    
        switch (@$_REQUEST["page"]) {
          case "pageCadastrar":
            include("novo-usuario.php");
           break;
          case "listar":
            include("listar-usuario.php");
          case "cadastrar";
            include("salvar-usuario.php");
           break;
          case "pageEditar":
            include("editar-usuario.php");
           break;
          case "editar":
            include("salvar-usuario.php");
           break;
           case "excluir";
            include("salvar-usuario.php");
          
        

          default:
            print "<h1>Bem Vindo! </h1>";
        }
        ?>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>