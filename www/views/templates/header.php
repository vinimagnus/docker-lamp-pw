<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
   

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="assets/js/script.js"></script>

</head>
<body>
    <header class="p-5 bg-primary text-white text-center">
        <h1>Minha página HTML</h1>
        <p>Exemplo de estrutura para utilizarmos na disciplina de PW!!</p>
    </header>
    <section class="row">
        <nav class="col-md-3 p-3">
            <h2>Menu</h2>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a id="home" class="nav-link" href="?controller=site&action=home">Home</a>
              </li>
              <li class="nav-item">
                <a id="about" class="nav-link" href="?controller=site&action=about">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?controller=site&action=products">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?controller=site&action=contact">Contato</a>
              </li>
              <h3>Clientes</h3>
              <li class="nav-item">
                <a class="nav-link" href="?controller=client&action=insertClient">Cadastro</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?controller=client&action=listClients">Listar Clientes</a>
              </li>
            </ul>
        </nav>
        <article class="col-md-9 p-3">