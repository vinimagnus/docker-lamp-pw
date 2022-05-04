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
    <header class="p-5 bg-secondary text-white text-center">
        <h1>Minha Área Administrativa</h1>
        <p>Exemplo de estrutura ADMIN...</p>
        <a class="link-light" href="index.php?controller=main&action=logout" >Sair</a>
    </header>
    <section class="row">
        <nav class="col-md-3 p-3">
            <h2>Menu</h2>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a id="home" class="nav-link" href="?controller=main&action=index">Home</a>
              </li>
            </ul>
            <h3>Clientes</h3>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a id="list" class="nav-link" href="?controller=client&action=listClients">Lista Clientes</a>
              </li>
              <li class="nav-item">
                <a id="insert" class="nav-link" href="?controller=client&action=insertClient"> -> Novo Cliente</a>
              </li>
            </ul>

              
        </nav>
        <article class="col-md-9 p-3">