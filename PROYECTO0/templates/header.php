<?php
$urlBase = "http://localhost:8080/Proyecto0"
?>

<!doctype html>
<html lang="es">

<head>
  <title>Proyecto 0</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../styles/styles.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-expand navbar-light bg-light mb-4">
      <div class="container px-2 py-1">
        <a class="navbar-brand" href="<?php echo $urlBase; ?>">
          Proyecto 0
        </a>
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo $urlBase; ?>/user/index.php" aria-current="page">Usuarios <span class="visually-hidden">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $urlBase; ?>/secciones/crear.php">Crear usuario</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="container">
    <div class="content-wrap">